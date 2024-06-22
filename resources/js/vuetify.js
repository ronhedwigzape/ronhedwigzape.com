// Styles
import '@mdi/font/css/materialdesignicons.css';
import 'vuetify/styles';
import 'vuetify/dist/vuetify.min.css';

// Composables
import { createVuetify } from 'vuetify';
import { VDateInput } from 'vuetify/labs/VDateInput';

// Globally register all Vuetify components and directives
import * as components from 'vuetify/components';
import * as directives from 'vuetify/directives';

export default createVuetify({
    theme: {
        defaultTheme: 'light',
    },
    components: {
        ...components,
        VDateInput,
    },
    directives: {
        ...directives,
    },
});
