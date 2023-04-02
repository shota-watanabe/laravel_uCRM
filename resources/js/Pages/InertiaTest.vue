<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import { ref } from 'vue'

const newTitle = ref('')
const newContent = ref('')
</script>

<template>
    Inertiaテストです。<br />
    <a href="/">aタグ経由です</a><br />
    <Link href="/">Link経由です</Link><br />
    <!-- ルートファイルで設定した名前付きルートを入れる -->
    <Link :href="route('inertia.index')">名前付きルートの確認です</Link><br />
    <Link :href="route('inertia.show', { id: 50 })"
        >ルートパラメータのテストです</Link
    >
    <div class="mb-8"></div>
    <input type="text" name="newTitle" v-model="newTitle" /><br />
    <input type="text" name="newContent" v-model="newContent" /><br>
    <!-- DBに保存する際はmethod="post"と指定する -->
    <Link
        as="button"
        method="post"
        :href="route('inertia.store')"
        :data="{ title: newTitle, content: newContent }"
    >
        DB保存テスト
    </Link>
</template>
