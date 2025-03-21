<script lang="ts" setup>
import MenuMain from "@/Components/MenuMain.vue";
import {Joystick, Mouse} from 'lucide-vue-next';
</script>


<template>
    <div class="relative">
        <img alt="" class="absolute object-contain object-top opacity-10 w-full" src="/assets/bg.jpg"
             style="top: -90px;">
        <div class="absolute w-full">
            <MenuMain/>
            <div class="max-w-6xl mx-auto">
                <div class="py-6 px-4">
                    <img alt="" class="h-[22.5rem] max-h-[22.5rem] object-cover object-top rounded-md w-full"
                         src="/assets/team.jpg">
                    <div>
                        <!--CONSOLES-->
                        <div class="flex flex-col lg:flex-row items-center gap-4 mt-6">
                            <div class="bg-card rounded-md flex items-center gap-4 w-full px-14 py-5">
                                <mouse class="text-white rotate-45" size="48"/>
                                <div class="flex flex-col">
                                    <p class="ont-bold text-xl uppercase">PC</p>
                                    <p class="font-bold text-xl uppercase text-orange-500">View Games</p>
                                </div>
                            </div>
                            <div class="bg-card rounded-md flex items-center gap-4 w-full px-14 py-5">
                                <Joystick class="text-white rotate-45" size="48"/>
                                <div class="flex flex-col">
                                    <p class="ont-bold text-xl uppercase">PS4</p>
                                    <p class="font-bold text-xl uppercase text-orange-500">View Games</p>
                                </div>
                            </div>
                            <div class="bg-card rounded-md flex items-center gap-4 w-full px-14 py-5">
                                <Joystick class="text-white rotate-45" size="48"/>
                                <div class="flex flex-col">
                                    <p class="ont-bold text-xl uppercase">XBOX</p>
                                    <p class="font-bold text-xl uppercase text-orange-500">View Games</p>
                                </div>
                            </div>
                        </div>

                        <!--HEADING-->
                        <div>
                            <div class="relative py-6">
                                <div aria-hidden="true" class="absolute inset-0 flex items-center">
                                    <div class="w-full border-t border-2 border-border"/>
                                </div>
                                <div class="relative flex ml-10">
                                    <span class="px-4 bg-background text-2xl text-primary font-bold"><span
                                        class="text-accent">Latest </span>News</span>
                                </div>
                            </div>
                        </div>
                        <!--NEWS-->
                        <div class="flex flex-col md:flex-row divide-x divide-secondary">
                            <div class="flex flex-col items-center w-full md:w-1/2 divide-y divide-secondary">
                                <div class="flex items-center bg-accent gap-4 px-2 py-4 w-full">
                                    <img alt="" class="rounded-md h-[3rem]" src="/assets/post-1.jpg"></img>
                                    <div>
                                        <h2 class="text-primary font-bold uppercase text-base">Smell magic in the air.
                                            Or maybe barbecue</h2>
                                        <p class="text-xs">With what mingled joy and sorrow do I take up the pen to
                                            w...</p>
                                    </div>
                                </div>
                                <div
                                    class="flex items-center bg-card gap-4 px-2 py-4 w-full hover:bg-secondary focus:bg-secondary focus:outline-none">
                                    <img alt="" class="rounded-md h-[3rem]" src="/assets/post-2.jpg"></img>
                                    <div>
                                        <h2 class="text-primary font-bold uppercase text-base">Grab your sword and fight
                                            the Horde</h2>
                                        <p class="text-xs">For good, too; though, in consequence of my previous
                                            emot...</p>
                                    </div>
                                </div>
                                <div
                                    class="flex items-center bg-card gap-4 px-2 py-4 w-full hover:bg-secondary focus:bg-secondary focus:outline-none">
                                    <img alt="" class="rounded-md h-[3rem]" src="/assets/post-3.jpg"></img>
                                    <div>
                                        <h2 class="text-primary font-bold uppercase text-base">We found a witch! May we
                                            burn her?</h2>
                                        <p class="text-xs">And she went on planning to herself how she would
                                            manag...</p>
                                    </div>
                                </div>
                                <div
                                    class="flex items-center bg-card gap-4 px-2 py-4 w-full hover:bg-secondary focus:bg-secondary focus:outline-none">
                                    <img alt="" class="rounded-md h-[3rem]" src="/assets/post-4.jpg"></img>
                                    <div>
                                        <h2 class="text-primary font-bold uppercase text-base">For good, too though, in
                                            consequence</h2>
                                        <p class="text-xs">This little wandering journey, without settled place of
                                            abod...
                                        </p>
                                    </div>
                                </div>
                                <div
                                    class="flex items-center bg-card gap-4 px-2 py-4 w-full hover:bg-secondary focus:bg-secondary focus:outline-none">
                                    <img alt="" class="rounded-md h-[3rem]" src="/assets/post-5.jpg"></img>
                                    <div>
                                        <h2 class="text-primary font-bold uppercase text-base">He made his passenger
                                            captain of one</h2>
                                        <p class="text-xs">Just then her head struck against the roof of the hall: in
                                            fact...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full md:w-1/2 flex flex-col bg-card divide-y divide-border">
                                <img alt="" class="md:rounded-tr-md w-full h-[16rem] md:h-[10.75rem]"
                                     src="/assets/post-1.jpg">
                                <div class="px-4 flex flex-col gap-3 py-3 h-full">
                                    <h2 class="text-primary font-bold uppercase text-base">Smell magic in the air.
                                        Or maybe barbecue</h2>
                                    <p class="md:text-xs">With what mingled joy and sorrow do I take up the pen to write
                                        to my dearest friend! Oh, what a change between to-day and yesterday! Now I am
                                        friendless and alone...</p>
                                    <div class="flex justify-between items-center mt-auto">
                                        <a class="text-accent font-bold uppercase hover:underline focus:outline-none focus:underline"
                                           href="#">Read more</a>
                                        <div class="flex items-center gap-1 text-xs text-muted">
                                            <CalendarDays size="16"/>
                                            Sep 18, 2018
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
