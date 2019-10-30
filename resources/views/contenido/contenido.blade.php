@extends('principal')
@section('contenido')
<!--SE LLAMA A UN COMPONENTE DEPENDIENDO DEL VALOR DE "MENU"-->
<template v-if="menu==0">
    <dashboard-component></dashboard-component>
</template>
<template v-if="menu==1">
    <categoria></categoria>
</template>
<template v-if="menu==2">
    <articulo></articulo>
</template>
<template v-if="menu==3">
    <cliente-component></cliente-component>
</template>
<template v-if="menu==4">
    <proveedor-component></proveedor-component>
</template>
<template v-if="menu==5">
    <user-component></user-component>
</template>
<template v-if="menu==6">
    <ingreso-component></ingreso-component>
</template>
<template v-if="menu==7">
    <consultaingreso-component></consultaingreso-component>
</template>
<template v-if="menu==8">
    <consultaventa-component></consultaventa-component>
</template>
<template v-if="menu==9">
    <venta-component></venta-component>
</template>
<template v-if="menu==10">
    <rol-component></rol-component>
</template>
<template v-if="menu==11">
    <ayuda-component></ayuda-component>
</template>
<template v-if="menu==12">
    <acerca-component></acerca-component>
</template>
@endsection