# -*- coding: utf-8 -*-
# Generated by Django 1.9.7 on 2016-06-23 14:02
from __future__ import unicode_literals

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('app', '0004_remove_terminal_codigo'),
    ]

    operations = [
        migrations.RenameField(
            model_name='estadoterminal',
            old_name='deshabilitado',
            new_name='estado',
        ),
        migrations.RemoveField(
            model_name='estadoterminal',
            name='en_reparacion',
        ),
        migrations.RemoveField(
            model_name='estadoterminal',
            name='habilitado',
        ),
    ]
