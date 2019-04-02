
<style scoped>
    .card-body {
        flex-direction: columns;
        border: none;
    }
    .chat {
        width: 100%;
        padding: 20px;
        box-shadow: inset 0 0 20px 0 grey;
        margin-bottom: 20px;
        border: 1px solid grey;
        max-height: 600px;
        overflow-x: auto;
    }

    .chat .chat-right, .chat .chat-left {
        max-width: 70%;
        box-shadow: 0 0 8px 0 grey;
        padding: 8px;
        margin: 4px;
    }

    .chat-right {
        float: right;
    }

    .chat-left {
        float: left;
    }
    .no-message{
        height: 200px;
        display: flex;
        align-items: center;
    }
</style>

<template>
    <div class="card-body">
    <div class="chat" v-if="chats.length != 0">
        <div v-for="chat in chats" style="overflow: auto;">
            <div class="chat-right" v-if="chat.user_id == userid">
                {{ chat.chat }}
            </div>
            <div class="chat-left" v-else>
                {{ chat.chat }}
            </div>
        </div>
    </div>
    <div v-else class="no-message">
        <h1>There Are no Message</h1>
    </div>
</div>
</template>

<script>
    export default {
        props: ['chats'],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
