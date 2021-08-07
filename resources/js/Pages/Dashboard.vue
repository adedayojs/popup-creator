<template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Dashboard
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <!-- <welcome /> -->

          <div class="container p-8">
            <div id="bar">
              <h1>Vue Pop Up Editor (Demo)</h1>

              <button
                v-on:click="saveDesign"
                class="
                  bg-blue-500
                  hover:bg-blue-700
                  text-white
                  font-bold
                  py-2
                  px-4
                  rounded
                "
              >
                Save Design
              </button>
              <button
                v-on:click="exportHtml"
                class="
                  bg-green-500
                  hover:bg-green-700
                  text-white
                  font-bold
                  py-2
                  px-4
                  rounded
                "
              >
                Export HTML
              </button>
            </div>

            <EmailEditor ref="emailEditor" v-on:load="editorLoaded" />
          </div>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import Welcome from "@/Jetstream/Welcome";
import { EmailEditor } from "vue-email-editor";

export default {
  components: {
    AppLayout,
    Welcome,
    EmailEditor,
  },

  methods: {
    editorLoaded() {
      // Pass your template JSON here
      // this.$refs.emailEditor.editor.loadDesign({});
    },
    saveDesign() {
      this.$refs.emailEditor.editor.saveDesign((design) => {
        console.log("saveDesign", design);
      });
    },
    exportHtml() {
      this.$refs.emailEditor.editor.exportHtml((data) => {
        console.log("exportHtml", data);
      });
    },
  },
};
</script>

<style scoped>
#email-editor-container,
#editor-1 {
  height: 80vh;
}
</style>
