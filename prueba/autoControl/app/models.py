from __future__ import unicode_literals
from django.db import models
from django.utils import timezone

class Centro(models.Model):
    numero = models.IntegerField(default=0)
    energia = models.IntegerField(default=0)
    codigo = models.CharField(max_length=200)
    created_date = models.DateTimeField(
    default=timezone.now)
    published_date = models.DateTimeField(
    blank=True, null=True)

    def publish(self):
        self.published_date = timezone.now()
        self.save()

    def __str__(self):
        return self.codigo

class EstadoTerminal(models.Model):
    estado = models.CharField(max_length=200)

    def __str__(self):
        return self.estado

    def publish(self):
        self.save()

class Bateria(models.Model):
    centro = models.ForeignKey(Centro)
    numero = models.IntegerField(default=0)
    estado = models.BooleanField(default=True)
    temperatura = models.IntegerField(default=0)
    energia = models.IntegerField(default=0)
    published_date = models.DateTimeField(
    default=timezone.now)

    def __str__(self):
        return str(self.numero)

    def publish(self):
        self.published_date = timezone.now()
        self.save()

class Terminal(models.Model):
    numero = models.IntegerField(default=0)
    estado = models.ForeignKey(EstadoTerminal)
    bateria = models.ForeignKey(Bateria)
    published_date = models.DateTimeField(
    blank=True, null=True)

    def publish(self):
        self.published_date = timezone.now()
        self.save()

    def __str__(self):
        return self.numero
