<template>
  <v-container class="fill-height d-flex flex-column justify-center align-center">
    <!-- Título -->
    <h1 class="text-h3 font-weight-bold mb-8 text-center">Sellos de Joaquín</h1>
    
    <!-- Selects juntos y centrados -->
    <div class="d-flex flex-wrap justify-center gap-4" style="max-width: 600px; width: 100%;">
      <v-select
        v-model="selectedProvince"
        :items="provinces"
        item-title="name"
        item-value="id"
        label="Provincia"
        outlined
        class="flex-grow-1 w-64"
        :change = "filterLocalities"
      />
      
      <v-select
        v-model="selectedLocality"
        :items="localities"
        item-title="name"
        item-value="id"
        label="Localidad"
        outlined
        class="flex-grow-1 w-64"
        :disabled="!selectedProvince"
        :change = "filterImages"
      />
    </div>
    
    <div v-if="images.length > 0" class="image-grid">
      <div v-for="image in images" :key="image.id" class="image-card">
        <img :src="'/' + image.path" alt="Imagen" class="image-preview" />
        <p class="image-name">{{ image.name }}</p>
      </div>
    </div>
    
    <p v-else-if="selectedLocality">No hay imágenes para esta localidad.</p>
  </v-container>
</template>

<style scoped>
.image-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
  gap: 16px;
  margin-top: 2rem;
  width: 100%;
  max-width: 1000px;
}

.image-card {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.image-preview {
  width: 100%;
  height: auto;
  object-fit: cover;
  border-radius: 8px;
}

.image-name {
  margin-top: 8px;
  text-align: center;
  font-weight: 500;
}
</style>


<script setup>
import { ref, computed } from 'vue';

defineProps({
  provinces: {
    type: Object,
  },
});

const selectedProvince = ref(null);
const selectedLocality = ref(null);
const localities = ref([]);
const images = ref([]);

const filterLocalities = computed(() => {
  
  if (!selectedProvince.value) return [];
  selectedLocality.value = null
  images.value = []
  axios.get(`/localities/${selectedProvince.value}`)
    .then(response => {
      localities.value = response.data;
    })
    .catch(error => {
      console.error('Error al traer las localidades:', error);
    });
});

const filterImages = computed(() => {
  images.value = []
  if (!selectedLocality.value) return [];
  axios.get(`/images/${selectedLocality.value}`)
    .then(response => {
      images.value = response.data;
    })
    .catch(error => {
      console.error('Error al traer las imagenes:', error);
    });
});
</script>
