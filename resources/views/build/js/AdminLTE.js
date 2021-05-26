import ControlSidebar from './ControlSidebar'
import Layout from './Layout'
import PushMenu from './PushMenu'
import Treeview from './Treeview'
import Widget from './Widget'

import VueRouter from 'vue-router'
Vue.use(VueRouter)

import { Form, HasError, AlertError } from 'vform'

window.Form = Form; 
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

window.Vue = require('vue');




export {
  ControlSidebar,
  Layout,
  PushMenu,
  Treeview,
  Widget
}
