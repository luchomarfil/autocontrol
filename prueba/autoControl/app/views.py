from django.shortcuts import render, get_object_or_404
from django.utils import timezone
from .models import Centro, Bateria, Terminal
from .forms import CentroForm, BateriaForm, TerminalForm
from django.shortcuts import redirect

# Create your views here.

def bateria_new(request):
    if request.method == 'GET':
        form = BateriaForm()
    else:
        form = BateriaForm(request.POST)
        if form.is_valid():
            bateria = form.save(commit=False)
            bateria.energia = form.cleaned_data['energia']
            bateria.numero = form.cleaned_data['numero']
            bateria.temperatura = form.cleaned_data['temperatura']
            bateria.published_date = timezone.now()
            bateria.save()
            return render(request,'confirma.html',{'accion':"La bateria se ha guardado correctamente"})
        else:
            form = BateriaForm()
    return render(request, 'bateria/bateria_new.html', {'form': form})

def terminal_new(request):
    if request.method == 'GET':
        form = TerminalForm()
    else:
        form = TerminalForm(request.POST)
        if form.is_valid():
            terminal = form.save(commit=False)
            terminal.bateria = form.cleaned_data['bateria']
            terminal.numero = form.cleaned_data['numero']
            terminal.estado = form.cleaned_data['estado']
            terminal.published_date = timezone.now()
            terminal.save()
            return render(request,'confirma.html',{'accion':"El terminal se ha guardado correctamente"})
        else:
            form = TerminalForm()
    return render(request, 'terminal/terminal_new.html', {'form': form})

def centro_new(request):
    if request.method == 'GET':
        form = CentroForm()
    else:
        form = CentroForm(request.POST)
        if form.is_valid():
            centro = form.save(commit=False)
            centro.energia = form.cleaned_data['energia']
            centro.numero = form.cleaned_data['numero']
            centro.codigo = form.cleaned_data['codigo']
            centro.published_date = timezone.now()
            centro.save()
            return render(request,'confirma.html',{'accion':"El centro se ha guardado correctamente"})
        else:
            form = CentroForm()
    return render(request, 'centro/centro_new.html', {'form': form})

def centro_edit(request, pk):
    try:
        centro = get_object_or_404(Centro, pk=pk)
        if request.method == "POST":
            form = CentroForm(request.POST, instance=centro)
            if form.is_valid():
                centro = form.save(commit=False)
                centro.save()
                return render(request,'centro/edicion_exitosa.html')
        else:
            form = CentroForm(instance=centro)
    except ValueError:
        return render(request,'error.html',{
        'error_message': "Se ha producido un error y no se pudo guardar el centro"})
    return render(request,'centro/centro_edit.html', {'form':form})

def bateria_edit(request, pk):
    try:
        bateria = get_object_or_404(Bateria, pk=pk)
        if request.method == "POST":
            form = BateriaForm(request.POST, instance=bateria)
            if form.is_valid():
                bateria = form.save(commit=False)
                bateria.save()
                return render(request,'edicion_exitosa.html')
        else:
            form = BateriaForm(instance=bateria)
    except ValueError:
        return render(request,'error.html',{
        'error_message': "Se ha producido un error y no se pudo editar la bateria"})
    return render(request,'bateria/bateria_edit.html', {'form':form})

def terminal_edit(request, pk):
    try:
        terminal = get_object_or_404(Terminal, pk=pk)
        if request.method == "POST":
            form = TerminalForm(request.POST, instance=terminal)
            if form.is_valid():
                terminal = form.save(commit=False)
                terminal.save()
                return render(request,'edicion_exitosa.html')
        else:
            form = TerminalForm(instance=terminal)
    except ValueError:
        return render(request,'error.html',{
        'error_message': "Se ha producido un error y no se pudo editar la terminal"})
    return render(request,'terminal/terminal_edit.html', {'form':form})

def centro_detail(request, pk):
    centro = get_object_or_404(Centro, pk=pk)
    return render(request, 'centro/centro_detail.html', {'centro': centro})

def bateria_detail(request, pk):
    bateria = get_object_or_404(Bateria, pk=pk)
    return render(request, 'bateria/bateria_detail.html', {'bateria': bateria})

def terminal_detail(request, pk):
    terminal = get_object_or_404(Terminal, pk=pk)
    return render(request, 'terminal/terminal_detail.html', {'terminal': terminal})

def terminal_list(request):
    terminales = Terminal.objects.all()
    return render(request, 'terminal/terminal_list.html', {'terminales':terminales})

def centro_list(request):
    centros = Centro.objects.all()
    return render(request, 'centro/centro_list.html', {'centros':centros})

def bateria_list(request):
    baterias = Bateria.objects.all()
    return render(request, 'bateria/bateria_list.html', {'baterias':baterias})

def principal(request):
    return render(request, 'index.html')

def centro_borrar(request, pk):
    centro = get_object_or_404(Centro, pk=pk)
    return render(request, 'centro/centro_borrar.html',{'centro':centro})

def bateria_borrar(request, pk):
    bateria = get_object_or_404(Bateria, pk=pk)
    return render(request, 'bateria/bateria_borrar.html',{'bateria':bateria})

def terminal_borrar(request, pk):
    terminal = get_object_or_404(Terminal, pk=pk)
    return render(request, 'terminal/terminal_borrar.html',{'terminal':terminal})

def confirma_borrado(request, pk):
    try:
        centro = Centro.objects.get(pk=pk)
        Centro.objects.filter(pk=pk).delete()
    except (KeyError, Centro.DoesNotExist):
        return render(request,'error.html',{
            'error_message': "Se ha producido un error y no se pudo borrar el centro."
        })
    else:
        return render(request, 'confirma_borrado.html')

def confirma_borrado_bateria(request, pk):
    try:
        bateria = Bateria.objects.get(pk=pk)
        Bateria.objects.filter(pk=pk).delete()
    except (KeyError, Bateria.DoesNotExist):
        return render(request,'error.html',{
            'error_message': "Se ha producido un error y no se pudo borrar la bateria."
        })
    else:
        return render(request, 'confirma_borrado.html')

def confirma_borrado_terminal(request, pk):
    try:
        terminal = Terminal.objects.get(pk=pk)
        Terminal.objects.filter(pk=pk).delete()
    except (KeyError, Terminal.DoesNotExist):
        return render(request,'error.html',{
            'error_message': "Se ha producido un error y no se pudo borrar el terminal."
        })
    else:
        return render(request, 'confirma_borrado.html')
