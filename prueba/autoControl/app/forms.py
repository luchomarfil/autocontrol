from django import forms

from .models import Centro, Bateria, Terminal

class CentroForm(forms.ModelForm):

    class Meta:
        model = Centro
        fields = ('numero', 'energia','codigo')

class BateriaForm(forms.ModelForm):

    class Meta:
        model = Bateria
        fields = ('numero', 'energia','temperatura','centro')

class TerminalForm(forms.ModelForm):

    class Meta:
        model = Terminal
        fields = ('numero', 'estado','bateria')
