from django.conf.urls import include, url
from . import views

urlpatterns = [
        url(r'^$', views.principal),
        url(r'^centrolist/$', views.centro_list, name='centro_list'),
        url(r'^terminallist/$', views.terminal_list, name='terminal_list'),
        url(r'^baterialist/$', views.bateria_list, name='bateria_list'),
        url(r'^bateriadetail/(?P<pk>[0-9]+)/$', views.bateria_detail, name='bateria_detail'),
        url(r'^termianaldetail/(?P<pk>[0-9]+)/$', views.terminal_detail, name='terminal_detail'),
        url(r'^detail/(?P<pk>[0-9]+)/$', views.centro_detail, name='centro_detail'),
        url(r'^bateria/new/$', views.bateria_new, name='bateria_new'),
        url(r'^centro/new/$', views.centro_new, name='centro_new'),
        url(r'^terminal/new/$', views.terminal_new, name='terminal_new'),
        url(r'^centro/(?P<pk>[0-9]+)/edit/$', views.centro_edit, name='centro_edit'),
        url(r'^centro/(?P<pk>[0-9]+)/bateriaedit/$', views.bateria_edit, name='bateria_edit'),
        url(r'^terminal/(?P<pk>[0-9]+)/terminaledit/$', views.terminal_edit, name='terminal_edit'),
        url(r'^centro/borrar/(?P<pk>[0-9]+)$', views.centro_borrar),
        url(r'^bateria/borrar/(?P<pk>[0-9]+)$', views.bateria_borrar),
        url(r'^terminal/borrar/(?P<pk>[0-9]+)$', views.terminal_borrar),
        url(r'^centro/borradoconfirmado/(?P<pk>[0-9]+)$', views.confirma_borrado),
        url(r'^centro/confirmaborradobateria/(?P<pk>[0-9]+)$', views.confirma_borrado_bateria),
    ]
