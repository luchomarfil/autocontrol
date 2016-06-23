from django.contrib import admin
from .models import Centro, Bateria, Terminal, EstadoTerminal


admin.site.register(Centro)
admin.site.register(Bateria)
admin.site.register(Terminal)
admin.site.register(EstadoTerminal)

# Register your models here.
