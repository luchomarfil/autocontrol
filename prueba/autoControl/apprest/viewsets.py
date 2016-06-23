from .models import Bateria, Centro, Terminal
from .serializers import CentroSerializer, BateriaSerializer, TerminalSerializer
from rest_framework import viewsets

class BateriaViewSet(viewsets.ModelViewSet):

    serializer_class = BateriaSerializer
    queryset = Bateria.objects.all()

class TerminalViewSet(viewsets.ModelViewSet):

    serializer_class = TerminalSerializer
    queryset = Terminal.objects.all()

class CentroViewSet(viewsets.ModelViewSet):

    serializer_class = CentroSerializer
    queryset = Centro.objects.all()
