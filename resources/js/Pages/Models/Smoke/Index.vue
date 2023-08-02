<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Widget from '@/Components/Widget.vue';
import moment from "moment";
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Smoke Tracker" />

    <AppLayout>
        <template #header>
            Example
        </template>

        <Widget>
          <button class="btn btn-primary">New Smoke</button>
        </Widget>

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
                <td>{{ moment(entry.created_at).format('HH:mm') }}</td>
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