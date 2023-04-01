<script setup>
import { Link } from "@inertiajs/inertia-vue3";
</script>

<template>
    Inertiaテストです。<br />
    <a href="/">aタグ経由です</a><br />
    <Link href="/">Link経由です</Link><br />
    <!-- ルートファイルで設定した名前付きルートを入れる -->
    <Link :href="route('inertia.index')">名前付きルートの確認です</Link><br>
    <Link :href="route('inertia.show', {id: 50})">ルートパラメータのテストです</Link>
</template>
