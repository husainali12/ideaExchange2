<template>
  <div>
      
      <div v-if="!loginPage">
      <toolber></toolber> 
      </div>
      <login v-if="loginPage"></login>

  
<appfooter></appfooter> 
  </div>
  

</template>

<script>
import toolber from './Toolber'
import Appfooter from './AppFooter'
import Login from './Login/Login'
export default {

    components:{toolber,Appfooter,Login},
    data(){
        return{
            loginPage:false,
        }
    },
    created(){
        EventBus.$on('login',()=>{

                this.loginPage = true;

            })
    }

}
</script>

<style lang="sass" scoped>

</style>

