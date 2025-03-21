<script lang="ts" setup>
import {Disclosure, DisclosureButton, DisclosurePanel, MenuButton, MenuItem, MenuItems} from '@headlessui/vue'
import {Bell, Menu, Search, X} from 'lucide-vue-next';
</script>

<template>
    <Disclosure v-slot="{ open }" as="nav" class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-2 sm:px-4 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="flex items-center px-2 lg:px-0">
                    <div class="shrink-0">
                        <img alt="Your Company"
                             class="h-8 w-auto"
                             src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"/>
                    </div>
                    <div class="hidden lg:ml-6 lg:block">
                        <div class="flex space-x-4">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <a class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" href="#">Dashboard</a>
                            <a class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white"
                               href="#">Team</a>
                            <a class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white"
                               href="#">Projects</a>
                            <a class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white"
                               href="#">Calendar</a>
                        </div>
                    </div>
                </div>
                <div class="flex flex-1 justify-center px-2 lg:ml-6 lg:justify-end">
                    <div class="grid w-full max-w-lg grid-cols-1 lg:max-w-xs">
                        <input aria-label="Search"
                               class="col-start-1 row-start-1 block w-full rounded-md bg-gray-700 py-1.5 pr-3 pl-10 text-base text-white outline-hidden placeholder:text-gray-400 focus:bg-white focus:text-gray-900 focus:placeholder:text-gray-400 sm:text-sm/6"
                               name="search"
                               placeholder="Search"
                               type="search"/>
                        <Search
                            aria-hidden="true"
                            class="pointer-events-none col-start-1 row-start-1 ml-3 size-5 self-center text-gray-400"/>
                    </div>
                </div>
                <div class="flex lg:hidden">
                    <!-- Mobile menu button -->
                    <DisclosureButton
                        class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:outline-hidden focus:ring-inset">
                        <span class="absolute -inset-0.5"/>
                        <span class="sr-only">Open main menu</span>
                        <Menu v-if="!open" aria-hidden="true" class="block size-6"/>
                        <X v-else aria-hidden="true" class="block size-6"/>
                    </DisclosureButton>
                </div>
                <div class="hidden lg:ml-4 lg:block">
                    <div class="flex items-center">
                        <button
                            class="relative shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden"
                            type="button">
                            <span class="absolute -inset-1.5"/>
                            <span class="sr-only">View notifications</span>
                            <Bell aria-hidden="true" class="size-6"/>
                        </button>

                        <!-- Profile dropdown -->
                        <Menu as="div" class="relative ml-4 shrink-0">
                            <div>
                                <MenuButton
                                    class="relative flex rounded-full bg-gray-800 text-sm text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden">
                                    <span class="absolute -inset-1.5"/>
                                    <span class="sr-only">Open user menu</span>
                                    <img alt=""
                                         class="size-8 rounded-full"
                                         src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"/>
                                </MenuButton>
                            </div>
                            <transition enter-active-class="transition ease-out duration-100"
                                        enter-from-class="transform opacity-0 scale-95"
                                        enter-to-class="transform opacity-100 scale-100"
                                        leave-active-class="transition ease-in duration-75"
                                        leave-from-class="transform opacity-100 scale-100"
                                        leave-to-class="transform opacity-0 scale-95">
                                <MenuItems
                                    class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 ring-1 shadow-lg ring-black/5 focus:outline-hidden">
                                    <MenuItem v-slot="{ active }">
                                        <a :class="[active ? 'bg-gray-100 outline-hidden' : '', 'block px-4 py-2 text-sm text-gray-700']"
                                           href="#">Your
                                            Profile</a>
                                    </MenuItem>
                                    <MenuItem v-slot="{ active }">
                                        <a :class="[active ? 'bg-gray-100 outline-hidden' : '', 'block px-4 py-2 text-sm text-gray-700']"
                                           href="#">Settings</a>
                                    </MenuItem>
                                    <MenuItem v-slot="{ active }">
                                        <a :class="[active ? 'bg-gray-100 outline-hidden' : '', 'block px-4 py-2 text-sm text-gray-700']"
                                           href="#">Sign
                                            out</a>
                                    </MenuItem>
                                </MenuItems>
                            </transition>
                        </Menu>
                    </div>
                </div>
            </div>
        </div>

        <DisclosurePanel class="lg:hidden">
            <div class="space-y-1 px-2 pt-2 pb-3">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <DisclosureButton as="a" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white"
                                  href="#">
                    Dashboard
                </DisclosureButton>
                <DisclosureButton as="a"
                                  class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white"
                                  href="#">
                    Team
                </DisclosureButton>
                <DisclosureButton as="a"
                                  class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white"
                                  href="#">
                    Projects
                </DisclosureButton>
                <DisclosureButton as="a"
                                  class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white"
                                  href="#">
                    Calendar
                </DisclosureButton>
            </div>
            <div class="border-t border-gray-700 pt-4 pb-3">
                <div class="flex items-center px-5">
                    <div class="shrink-0">
                        <img alt=""
                             class="size-10 rounded-full"
                             src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"/>
                    </div>
                    <div class="ml-3">
                        <div class="text-base font-medium text-white">Tom Cook</div>
                        <div class="text-sm font-medium text-gray-400">tom@example.com</div>
                    </div>
                    <button
                        class="relative ml-auto shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden"
                        type="button">
                        <span class="absolute -inset-1.5"/>
                        <span class="sr-only">View notifications</span>
                        <Bell aria-hidden="true" class="size-6"/>
                    </button>
                </div>
                <div class="mt-3 space-y-1 px-2">
                    <DisclosureButton as="a"
                                      class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white"
                                      href="#">
                        Your Profile
                    </DisclosureButton>
                    <DisclosureButton as="a"
                                      class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white"
                                      href="#">
                        Settings
                    </DisclosureButton>
                    <DisclosureButton as="a"
                                      class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white"
                                      href="#">
                        Sign out
                    </DisclosureButton>
                </div>
            </div>
        </DisclosurePanel>
    </Disclosure>
</template>
