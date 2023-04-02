<script setup>
import { reactive } from "vue";
import { Inertia } from "@inertiajs/inertia";

const form = reactive({
    title: null,
    content: null,
});

const submitFunction = () => {
  // 引数にエンドポイント
  Inertia.post('/inertia', form)
};
</script>

<template>
    <!-- submit時、ページの再描画を防ぐ -->
    <form @submit.prevent="submitFunction">
        <input name="title" type="text" v-model="form.title" /><br />
        <input name="content" type="text" v-model="form.content" />
        <button>送信</button>
    </form>
</template>
