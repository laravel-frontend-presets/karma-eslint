<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        I'm an example component!
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
/* eslint-disable no-console */
export default {
  mounted() {
    console.log('Component mounted...');
  },
  methods: {
    hello() {
      return 'Add a test for this function if you want me to be covered!';
    },
  },
};
</script>
