<script setup>
import ToastListItem from '@/Components/ToastListItem.vue';
import { onUnmounted, ref } from 'vue';
import { router, usePage } from "@inertiajs/vue3";
import toast from '@/Stores/toast';

const page = usePage();

let removeFinishEventListener = router.on('finish', () => {
    if(page.props.flash.message) {
        toast.add({
            message: page.props.flash.message,
        });
    }
})

onUnmounted(() => removeFinishEventListener());

function remove(index) {
    toast.remove(index);
}

</script>

<template>
    <TransitionGroup
    tag="div"
    enter-from-class="translate-x-full opacity-0"
    enter-active-class="duration-500"
    leave-active-class="duration-500"
    leave-to-class="translate-x-full opacity-0"
    class="fixed left-0 right-0 p-2 top-0 z-50 space-y-1">
        <ToastListItem 
            v-for="(item, index) in toast.items" 
            :key="item.key" 
            :message="item.message"
            :duration="3000"
            @remove="remove(index)" />
    </TransitionGroup>
</template>