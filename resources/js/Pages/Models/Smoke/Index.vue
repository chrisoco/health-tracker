<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Head } from '@inertiajs/vue3';
import Widget from '@/Components/Widget.vue';
</script>

<template>
    <Head title="Smoke Tracker" />

    <AppLayout>
        <template #header>
            Example
        </template>

        <Widget :class="'lg:col-span-2'">
          <table class="table table-zebra text-center">
            <!-- head -->
            <thead>
              <tr>
                <th>#</th>
                <th>Time</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <!-- row 1 -->
              <tr v-for="entry in today" class="hover">
                <th>1</th>
                <td>{{ new Date(entry.created_at).toLocaleTimeString() }}</td>
                <th><button class="btn btn-xs btn-outline btn-error">Delete</button></th>
              </tr>
            </tbody>
          </table>
        </Widget>

        <Widget>
          <table class="table table-zebra text-center">
            <!-- head -->
            <thead>
              <tr>
                <th>#</th>
                <th>Time</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <!-- row 1 -->
              <tr v-for="entry in today" class="hover">
                <th>1</th>
                <td>{{ new Date(entry.created_at).toLocaleTimeString() }}</td>
                <th><button class="btn btn-xs btn-outline btn-error">Delete</button></th>
              </tr>
            </tbody>
          </table>
        </Widget>

    </AppLayout>
</template>

<script>
  export default {
    props: {
      smoketrackings: Object,
      today: Object,
    }
  }
</script>