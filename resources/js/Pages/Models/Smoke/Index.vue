<script setup>
  import AppLayout from '@/Layouts/AppLayout.vue';
  import { Head, useForm } from '@inertiajs/vue3';
  import Widget from '@/Components/Widget.vue';
  import moment from "moment";

  defineProps({
    smokes: Object,
    today: Object
  })

  const smokeForm = useForm({})

</script>

<template>
    <Head title="Smoking Tracker" />

    <AppLayout>
        <template #header>
            Smoking Tracker
        </template>

        <Widget>
          <form @submit.prevent="smokeForm.post(route('smk.store'))" class="flex justify-center">
            <button type="submit" class="btn btn-success hover:bg-green-500 my-5 w-11/12">New Smoke</button>
          </form>
        </Widget>

        <Widget :class="'lg:col-span-2'">
          <h2 class="text-center pt-2">Today's records</h2>
          <table class="table table-zebra text-center">
            <!-- head -->
            <thead>
              <tr>
                <th>#</th>
                <th>Time</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <!-- row 1 -->
              <tr v-for="(entry, index) in  today" class="hover">
                <th>{{ today.length - index }}</th>
                <td>{{ moment(entry.created_at).format('HH:mm') }}</td>
                <th class="p-0"><button class="btn btn-sm btn-outline btn-error">Delete</button></th>
              </tr>
            </tbody>
          </table>
        </Widget>

        <Widget :class="'lg:col-span-3'">
          Charts Aye
        </Widget>

    </AppLayout>
</template>
