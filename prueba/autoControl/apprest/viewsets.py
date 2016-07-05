from .models import Bateria, Centro, Terminal
from .serializers import CentroSerializer, BateriaSerializer, TerminalSerializer
from rest_framework import viewsets, status
from rest_framework.response import Response
from rest_framework.decorators import detail_route
from rest_framework import generics

class BateriaViewSet(viewsets.ModelViewSet):

    serializer_class = BateriaSerializer
    queryset = Bateria.objects.all()

class TerminalViewSet(viewsets.ModelViewSet):

    serializer_class = TerminalSerializer
    queryset = Terminal.objects.all()

class CentroViewSet(viewsets.ModelViewSet):

    serializer_class = CentroSerializer
    queryset = Centro.objects.all()
