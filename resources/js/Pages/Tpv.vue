<template>
    <AuthenticatedLayout>


    </AuthenticatedLayout>
</template>
<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { usePage } from '@inertiajs/inertia-vue3'
import axios from 'axios'


//----------------
const empleados = ref([]);
const page = usePage()
const search = ref('')
const tickets = ref([])
const ticketDetails = ref([])
const zonas = ref([])
const familias = ref([])
const subfamilias = ref([])
const productos = ref([])
const ticket = ref({})
const ticketDetail = ref({})
const zona = ref({})
const familia = ref({})
const subfamilia = ref({})
const producto = ref({})
const servicio = ref({})
const tipo = ref('')
const total = ref(0)

onMounted(() => {

})

onBeforeUnmount(() => {
    getEmpleados();
})
const getEmpleados = () => {
    axios.get(route('empleados.index'))
    .then(response => {
        empleados.value = response.data
    })
    .catch(error => {
        console.log(error)
    })
}
const getTickets = () => {
    axios.get(route('tickets.abiertos'))
    .then(response => {
        tickets.value = response.data
    })
    .catch(error => {
        console.log(error)
    })
}

const getZonas = () => {
    axios.get(route('zonas.index'))
    .then(response => {
        zonas.value = response.data
    })
    .catch(error => {
        console.log(error)
    })
}



</script>
<style scoped>
/* style the scrollbar according to the theme and thinnest as possible */
::-webkit-scrollbar {
    width: 0.25rem;
    height: 0.25rem;
}
::-webkit-scrollbar-track {
    background: #f1f1f1;
}
::-webkit-scrollbar-thumb {
    background: #888;
}
::-webkit-scrollbar-thumb:hover {
    background: #555;
}

</style>
