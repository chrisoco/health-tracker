<!-- MyComponent.vue -->
<template>
  
  <div :class="computedClasses">
    <slot />
  </div>

</template>

<script>
export default {
  props: {
    // Set of default classes for the div
    classes: {
      type: String,
      default: 'bg-white overflow-hidden shadow-sm rounded-lg',
    },
    // Optional classes to be appended
    class: {
      type: String,
      default: '',
    },
  },
  computed: {
    computedClasses() {
      return `${this.classes} ${this.class}`;
    },
  },
};
</script>
