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
            <modal name="my-first-modal">
              <div class="p-5">
                Copy The text Below and paste it on your site <br />
                <div class="overflow">
                  <!-- <p id="htmlText" @click="copyText">{{ html }}</p> -->
                  <!-- <input id="htmlText" type="textarea" @click="copyText" :value="html" /> -->
                  <textarea
                    id="htmlText"
                    type="textarea"
                    @click="copyText"
                    :value="html"
                  ></textarea>
                </div>
              </div>
            </modal>
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

  data() {
    return {
      html: "",
    };
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
        this.$modal.show("my-first-modal");
        console.log("exportHtml", data);

        this.html = `
            <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
            <script src="//code.jquery.com/jquery-1.11.1.min.js"><\/script>
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"><\/script>
            
            <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: visible;">
                <div class="modal-dialog">
                    ${data.html}
                </div>
            </div>
            <script>
                $('#login-modal').modal()
            <\/script>`;
      });
    },

    copyText() {
      /* Get the text field */
      var copyText = document.getElementById("htmlText");

      /* Select the text field */
      copyText.select();
      //   copyText.setSelectionRange(0, 99999); /* For mobile devices */

      /* Copy the text inside the text field */
      document.execCommand("copy");

      /* Alert the copied text */
      alert("Text Copied");
    },
  },
};
</script>

<style scoped>
#email-editor-container,
#editor-1 {
  height: 80vh;
}
.overflow {
  overflow: scroll;
  height: 40vh;
  padding: 2em;
}
textarea {
  width: 100%;
  height: 61%;
}
</style>
