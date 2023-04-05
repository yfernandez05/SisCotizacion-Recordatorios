import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter)

/*Importamos los componentes .vue*/
import Empresa from './components/empresa/EmpresaIndex.vue';
import User from './components/user/UserIndex.vue';
import UserCreate from './components/user/UserCreate.vue';
import UserEdit from './components/user/UserEdit.vue';
import Rol from './components/rol/RolIndex.vue';
import RolCreate from './components/rol/RolCreate.vue';
import RolEdit from './components/rol/RolEdit.vue';
import LogError from './components/logerror/LogErrorIndex.vue';
import EstadoServicio from './components/estadoservicio/EstadoServicioIndex.vue';
import EstadoServicioCreate from './components/estadoservicio/EstadoServicioCreate.vue';
import EstadoServicioEdit from './components/estadoservicio/EstadoServicioEdit.vue';
import TipoServicio from './components/tiposervicio/TipoServicioIndex.vue';
import TipoServicioCreate from './components/tiposervicio/TipoServicioCreate.vue';
import TipoServicioEdit from './components/tiposervicio/TipoServicioEdit.vue';
import TipoDocumento from './components/tipodocumento/TipoDocumentoIndex.vue';
import TipoDocumentoCreate from './components/tipodocumento/TipoDocumentoCreate.vue';
import TipoDocumentoEdit from './components/tipodocumento/TipoDocumentoEdit.vue';
import Cliente from './components/cliente/ClienteIndex.vue';
import ClienteCreate from './components/cliente/ClienteCreate.vue';
import ClienteEdit from './components/cliente/ClienteEdit.vue';
import Servicio from './components/servicio/ServicioIndex.vue';
import ServicioCreate from './components/servicio/ServicioCreate.vue';
import ServicioEdit from './components/servicio/ServicioEdit.vue';

window.appRootUrl = window.location.origin;
window.appApiUrl = `${window.appRootUrl}/rest`;
window.intranetBaseUrl = '/crm';

export default new VueRouter({
    mode: 'history',
    linkActiveClass: "active",
     routes:[
         { 
            path: intranetBaseUrl,
            name: 'spa',
            component: Empresa,
        },
        {
            path: `${intranetBaseUrl}/user`,
            name: 'spa.user',
            component: User,
        },
        {
            path: `${intranetBaseUrl}/user/registrar`,
            name: 'spa.user.registrar',
            component: UserCreate,
        },
        {
            path: `${intranetBaseUrl}/user/editar/:id`,
            name: 'spa.user.editar',
            component: UserEdit,
        },
        {
            path: `${intranetBaseUrl}/rol`,
            name: 'spa.rol',
            component: Rol,
        },
        {
            path: `${intranetBaseUrl}/rol/registrar`,
            name: 'spa.rol.registrar',
            component: RolCreate,
        },
        {
            path: `${intranetBaseUrl}/rol/editar/:id`,
            name: 'spa.rol.editar',
            component: RolEdit,
        },
        {
            path: `${intranetBaseUrl}/logerror`,
            name: 'spa.logerror',
            component: LogError
        },
        {
            path: `${intranetBaseUrl}/tasainteres`,
            name: 'spa.tasainteres',
            component: User,
        },
        {
            path: `${intranetBaseUrl}/estadoservicio`,
            name: 'spa.estadoservicio',
            component: EstadoServicio,
        },
        {
            path: `${intranetBaseUrl}/estadoservicio/registrar`,
            name: 'spa.estadoservicio.registrar',
            component: EstadoServicioCreate,
        },
        {
            path: `${intranetBaseUrl}/estadoservicio/editar/:id`,
            name: 'spa.estadoservicio.editar',
            component: EstadoServicioEdit,
        },
        {
            path: `${intranetBaseUrl}/tiposervicio`,
            name: 'spa.tiposervicio',
            component: TipoServicio,
        },
        {
            path: `${intranetBaseUrl}/tiposervicio/registrar`,
            name: 'spa.tiposervicio.registrar',
            component: TipoServicioCreate,
        },
        {
            path: `${intranetBaseUrl}/tiposervicio/editar/:id`,
            name: 'spa.tiposervicio.editar',
            component: TipoServicioEdit,
        },
        {
            path: `${intranetBaseUrl}/tipodocumento`,
            name: 'spa.tipodocumento',
            component: TipoDocumento,
        },
        {
            path: `${intranetBaseUrl}/tipodocumento/registrar`,
            name: 'spa.tipodocumento.registrar',
            component: TipoDocumentoCreate,
        },
        {
            path: `${intranetBaseUrl}/tipodocumento/editar/:id`,
            name: 'spa.tipodocumento.editar',
            component: TipoDocumentoEdit,
        },
        {
            path: `${intranetBaseUrl}/cliente`,
            name: 'spa.cliente',
            component: Cliente,
        },
        {
            path: `${intranetBaseUrl}/cliente/registrar`,
            name: 'spa.cliente.registrar',
            component: ClienteCreate,
        },
        {
            path: `${intranetBaseUrl}/cliente/editar/:id`,
            name: 'spa.cliente.editar',
            component: ClienteEdit,
        },
        {
            path: `${intranetBaseUrl}/servicio`,
            name: 'spa.servicio',
            component: Servicio,
        },
        {
            path: `${intranetBaseUrl}/servicio/registrar`,
            name: 'spa.servicio.registrar',
            component: ServicioCreate,
        },
        {
            path: `${intranetBaseUrl}/servicio/editar/:id`,
            name: 'spa.servicio.editar',
            component: ServicioEdit,
        },
       /*  { 
            path: `${intranetBaseUrl}/dashboard`,
            name: 'spa.dashboard',
            component: require('./components/dashboard/DashboardIndex').default
        },
        {
            path: `${intranetBaseUrl}/cuenta`,
            name: 'spa.cuenta',
            component: require('./components/cuenta/CuentaIndex').default
        },
        {
            path: `${intranetBaseUrl}/cuenta/registrar`,
            name: 'spa.cuenta.registrar',
            component: require('./components/cuenta/CuentaCreate').default
        },
        {
            path: `${intranetBaseUrl}/cuenta/editar/:id`,
            name: 'spa.cuenta.editar',
            component: require('./components/cuenta/CuentaEdit').default
        },
        {
            path: `${intranetBaseUrl}/campania`,
            name: 'spa.campania',
            component: require('./components/campania/CampaniaIndex').default
        },
        {
            path: `${intranetBaseUrl}/campania/registrar`,
            name: 'spa.campania.registrar',
            component: require('./components/campania/CampaniaCreate').default
        },
        {
            path: `${intranetBaseUrl}/campania/editar/:id`,
            name: 'spa.campania.editar',
            component: require('./components/campania/CampaniaEdit').default
        },
        {
            path: `${intranetBaseUrl}/evento`,
            name: 'spa.evento',
            component: require('./components/evento/Eventoindex').default 
        },
        {
            path: `${intranetBaseUrl}/evento/registrar`,
            name: 'spa.evento.registrar',
            component: require('./components/evento/EventoCreate').default
        },
        {
            path: `${intranetBaseUrl}/evento/editar/:id`,
            name: 'spa.evento.editar',
            component: require('./components/evento/EventoEdit').default
        },
        {
            path: `${intranetBaseUrl}/alerta`,
            name: 'spa.alerta',
            component: require('./components/alerta/AlertaIndex').default 
        },
        {
            path: `${intranetBaseUrl}/alerta/registrar`,
            name: 'spa.alerta.registrar',
            component: require('./components/alerta/AlertaCreate').default 
        },
        {
            path: `${intranetBaseUrl}/alerta/editar/:id`,
            name: 'spa.alerta.editar',
            component: require('./components/alerta/AlertaEdit').default 
        },
       */
       
        /* 
        
        {
            path: `${intranetBaseUrl}/tipoAtencion`,
            name: 'spa.tipoAtencion',
            component: require('./components/tipoAtencion/TipoAtencionIndex').default
        },
        {
            path: `${intranetBaseUrl}/tipoAtencion/registrar`,
            name: 'spa.tipoAtencion.registrar',
            component: require('./components/tipoAtencion/TipoAtencionCreate').default
        },
        {
            path: `${intranetBaseUrl}/tipoAtencion/editar/:id`,
            name: 'spa.tipoAtencion.editar',
            component: require('./components/tipoAtencion/TipoAtencionEdit').default
        },
        {
            path: `${intranetBaseUrl}/atencion`,
            name: 'spa.atencion',
            component: require('./components/atencion/AtencionIndex').default
        },
        {
            path: `${intranetBaseUrl}/atencion/atender/:id`,
            name: 'spa.atencion.atender',
            component: require('./components/atencion/AtencionCreate').default
        },
        {
            path: `${intranetBaseUrl}/export`,
            name: 'spa.export',
            component: require('./components/basedatos/ExportBDIndex').default
        },
        {
            path: `${intranetBaseUrl}/import`,
            name: 'spa.import',
            component: require('./components/basedatos/ImportBDIndex').default
        },
        {
            path: `${intranetBaseUrl}/administrarcliente`,
            name: 'spa.administrarcliente',
            component: require('./components/administrarcliente/ClienteIndex').default
        },
        {
            path: `${intranetBaseUrl}/administrarcliente/editar/:id`,
            name: 'spa.administrarcliente.editar',
            component: require('./components/administrarcliente/ClienteEdit').default
        },

        {
            path: `${intranetBaseUrl}/instituciones`,
            name: 'spa.instituciones',
            component: require('./components/institucion/InstitucionIndex').default
        },
        {
            path: `${intranetBaseUrl}/instituciones/registrar`,
            name: 'spa.instituciones.registrar',
            component: require('./components/institucion/InstitucionCreate').default
        },
        {
            path: `${intranetBaseUrl}/instituciones/editar/:id`,
            name: 'spa.instituciones.editar',
            component: require('./components/institucion/InstitucionEdit').default
        },
        {
            path: `${intranetBaseUrl}/tipoconfirmacion`,
            name: 'spa.tipoconfirmacion',
            component: require('./components/tipoconfirmacion/TipoConfirmacionIndex').default
        },
        {
            path: `${intranetBaseUrl}/tipoconfirmacion/registrar`,
            name: 'spa.tipoconfirmacion.registrar',
            component: require('./components/tipoconfirmacion/TipoConfirmacionCreate').default
        },
        {
            path: `${intranetBaseUrl}/tipoconfirmacion/editar/:id`,
            name: 'spa.tipoconfirmacion.editar',
            component: require('./components/tipoconfirmacion/TipoConfirmacionEdit').default
        },
        {
            path: `${intranetBaseUrl}/atencioninstitucion`,
            name: 'spa.atencioninstitucion',
            component: require('./components/atencioninstitucion/AtencionInstitucionIndex').default
        },
        {
            path: `${intranetBaseUrl}/atencioninstitucion/atender/:id`,
            name: 'spa.atencioninstitucion.atender',
            component: require('./components/atencioninstitucion/AtencionInstitucionCreate').default
        },
        {
            path: `${intranetBaseUrl}/reporte`,
            name: 'spa.reporte',
            component: require('./components/reporte/ReporteIndex').default
        },
        {
            path: `${intranetBaseUrl}/invitacion`,
            name: 'spa.invitacion',
            component: require('./components/invitacion/InvitacionIndex').default
        },
        {
            path: `${intranetBaseUrl}/invitacion/registrar`,
            name: 'spa.invitacion.registrar',
            component: require('./components/invitacion/InvitacionCreate').default
        },
        {
            path: `${intranetBaseUrl}/invitacion/editar/:id`,
            name: 'spa.invitacion.editar',
            component: require('./components/invitacion/invitacionEdit').default
        },  
 */

        { path: '*', redirect: intranetBaseUrl },
        { path: '/', redirect: intranetBaseUrl },
    ]
  });