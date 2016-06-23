from rest_framework import serializers
from .models import Centro, Terminal, Bateria


class CentroSerializer(serializers.ModelSerializer):

    class Meta:
        model = Centro
        fields = ('numero', 'energia','codigo')

class BateriaSerializer(serializers.ModelSerializer):

    class Meta:
        model = Bateria
        fields = ('numero', 'energia','temperatura','centro')

class TerminalSerializer(serializers.ModelSerializer):

    class Meta:
        model = Terminal
        fields = ('numero', 'estado','bateria')
