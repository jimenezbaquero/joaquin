<script setup>
import {computed, ref} from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import {Link} from '@inertiajs/vue3';

const showingNavigationDropdown = ref(false);

const classes = (current) => {
    let aux = 'block px-4 py-2 text-sm rounded-md transition-colors duration-200 border-none outline-none dev'
    let aux2 = route().current(current)? ' bg-green-600 text-white' : ' text-gray-700 hover:bg-green-100 hover:text-green-800'
    return aux + aux2
  }
;
</script>

<template>
  <div class="flex min-h-screen bg-gray-100">
    <!-- Sidebar -->
    <aside class="w-48 bg-white border-r border-gray-200">
      <div class="p-6">
        <Link :href="route('dashboard')" class="text-lg font-semibold text-gray-900">
          <ApplicationLogo class="h-10 w-auto"/>
        </Link>
      </div>
      <nav class="mt-6 flex flex-col space-y-2">
        <NavLink :class="classes('provinces')" :href="route('dashboard')" :active="route().current('dashboard')">
          Provincias
        </NavLink>
        <NavLink :class="classes('localities')" :href="route('dashboard')" :active="route().current('dashboard')">
          Localidades
        </NavLink>
        <NavLink :class="classes('images')" :href="route('dashboard')" :active="route().current('dashboard')">
          Imágenes
        </NavLink>
      </nav>
    </aside>
    
    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
      <!-- Top Navigation -->
      <nav class="bg-white border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="flex justify-between h-16">
            <div class="flex">
              <!-- Additional navigation items can go here -->
            </div>
            <div class="flex items-center">
              <!-- User Dropdown -->
              <Dropdown align="right" width="48">
                <template #trigger>
                  <button
                    class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 focus:outline-none">
                    {{ $page.props.auth.user.name }}
                    <svg class="ml-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"/>
                    </svg>
                  </button>
                </template>
                <template #content>
                  <DropdownLink :href="route('profile.edit')">
                    Perfil
                  </DropdownLink>
                  <DropdownLink :href="route('logout')" method="post" as="button">
                    Cerrar sesión
                  </DropdownLink>
                </template>
              </Dropdown>
            </div>
          </div>
        </div>
      </nav>
      
      <!-- Page Heading -->
      <header class="bg-white shadow" v-if="$slots.header">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
          <slot name="header"/>
        </div>
      </header>
      
      <!-- Page Content -->
      <main class="flex-1">
        <slot/>
      </main>
    </div>
  </div>
</template>

