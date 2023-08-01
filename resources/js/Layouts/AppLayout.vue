<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';

const showingNavigationDropdown = ref(false);
</script>

<template>
    <div class="min-h-screen bg-gray-100">
        <div class="mx-2 lg:mx-0">
            <div class="drawer lg:drawer-open">
                <input id="my-drawer-3" type="checkbox" class="drawer-toggle" /> 
                <div class="drawer-content flex flex-col">
                    <!-- Navbar -->
                    <div class="w-full navbar bg-base-100 rounded-xl lg:rounded-none mt-1 lg:mt-0 mb-1">
                        <div class="flex-none lg:hidden">
                            <label for="my-drawer-3" class="btn btn-square btn-ghost">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-6 h-6 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                            </label>
                        </div>
                        <!-- Page Heading -->
                        <div class="flex-1 px-2 mx-2" v-if="$slots.header">
                            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                                <slot name="header" />
                            </h2>
                        </div>

                        <div class="flex-none lg:block">
                            <div class="ml-3 relative">
                                <Dropdown align="right" width="48">
                                    <template #trigger>
                                        <span class="inline-flex rounded-md">
                                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                                {{ $page.props.auth.user.email }}
                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path
                                                        fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"
                                                    />
                                                </svg>
                                            </button>
                                        </span>
                                    </template>

                                    <template #content>
                                        <DropdownLink :href="route('profile.edit')"> Profile </DropdownLink>
                                        <DropdownLink :href="route('logout')" method="post" as="button">
                                            Log Out
                                        </DropdownLink>
                                    </template>
                                </Dropdown>
                            </div>
                        </div>
                    </div>

                    <!-- Page content here -->
                    
                    Content
                    <div class="sm:hidden">Mobile</div>
                    <div class="sm:visible md:hidden">SM</div>
                    <div class="md:visible lg:hidden">MD</div>
                    <div class="lg:visible xl:hidden">LG</div>
                </div> 
                <div class="drawer-side">
                    <label for="my-drawer-3" class="drawer-overlay"></label> 
                    <ul class="menu p-4 w-80 h-full" style="background-color:#8031f6;">
                        <ApplicationLogo
                                style="height: 3rem;"
                            />
                        
                        <li></li>
                        <!-- Sidebar content here -->
                        <li><a>Sidebar Item 1</a></li>
                        <li><a>Sidebar Item 2</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>
