// vite.config.js
import { defineConfig } from "file:///C:/Users/User/Desktop/web/Work/okuoku/node_modules/vite/dist/node/index.js";
import laravel from "file:///C:/Users/User/Desktop/web/Work/okuoku/node_modules/laravel-vite-plugin/dist/index.js";
import react from "file:///C:/Users/User/Desktop/web/Work/okuoku/node_modules/@vitejs/plugin-react/dist/index.mjs";
var vite_config_default = defineConfig({
  plugins: [
    laravel({
      input: [
        "resources/css/app.css",
        "resources/scss/style.scss",
        "resources/scss/dashboard/style.scss",
        "resources/js/dashboard/app.js",
        "resources/js/main.min.js",
        "resources/views/user/profile/src/main.jsx"
      ],
      refresh: true
    }),
    react()
  ]
});
export {
  vite_config_default as default
};
//# sourceMappingURL=data:application/json;base64,ewogICJ2ZXJzaW9uIjogMywKICAic291cmNlcyI6IFsidml0ZS5jb25maWcuanMiXSwKICAic291cmNlc0NvbnRlbnQiOiBbImNvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9kaXJuYW1lID0gXCJDOlxcXFxVc2Vyc1xcXFxVc2VyXFxcXERlc2t0b3BcXFxcd2ViXFxcXFdvcmtcXFxcb2t1b2t1XCI7Y29uc3QgX192aXRlX2luamVjdGVkX29yaWdpbmFsX2ZpbGVuYW1lID0gXCJDOlxcXFxVc2Vyc1xcXFxVc2VyXFxcXERlc2t0b3BcXFxcd2ViXFxcXFdvcmtcXFxcb2t1b2t1XFxcXHZpdGUuY29uZmlnLmpzXCI7Y29uc3QgX192aXRlX2luamVjdGVkX29yaWdpbmFsX2ltcG9ydF9tZXRhX3VybCA9IFwiZmlsZTovLy9DOi9Vc2Vycy9Vc2VyL0Rlc2t0b3Avd2ViL1dvcmsvb2t1b2t1L3ZpdGUuY29uZmlnLmpzXCI7aW1wb3J0IHsgZGVmaW5lQ29uZmlnIH0gZnJvbSAndml0ZSc7XG5pbXBvcnQgbGFyYXZlbCBmcm9tICdsYXJhdmVsLXZpdGUtcGx1Z2luJztcbmltcG9ydCByZWFjdCBmcm9tICdAdml0ZWpzL3BsdWdpbi1yZWFjdCc7XG5cblxuZXhwb3J0IGRlZmF1bHQgZGVmaW5lQ29uZmlnKHtcbiAgcGx1Z2luczogW1xuICAgIGxhcmF2ZWwoe1xuICAgICAgaW5wdXQ6IFsncmVzb3VyY2VzL2Nzcy9hcHAuY3NzJywgJ3Jlc291cmNlcy9zY3NzL3N0eWxlLnNjc3MnLCAncmVzb3VyY2VzL3Njc3MvZGFzaGJvYXJkL3N0eWxlLnNjc3MnLFxuICAgICAgICAncmVzb3VyY2VzL2pzL2Rhc2hib2FyZC9hcHAuanMnLCAncmVzb3VyY2VzL2pzL21haW4ubWluLmpzJywgJ3Jlc291cmNlcy92aWV3cy91c2VyL3Byb2ZpbGUvc3JjL21haW4uanN4J10sXG4gICAgICByZWZyZXNoOiB0cnVlLFxuICAgIH0pLFxuICAgIHJlYWN0KCksXG4gIF0sXG59KTtcbiJdLAogICJtYXBwaW5ncyI6ICI7QUFBK1MsU0FBUyxvQkFBb0I7QUFDNVUsT0FBTyxhQUFhO0FBQ3BCLE9BQU8sV0FBVztBQUdsQixJQUFPLHNCQUFRLGFBQWE7QUFBQSxFQUMxQixTQUFTO0FBQUEsSUFDUCxRQUFRO0FBQUEsTUFDTixPQUFPO0FBQUEsUUFBQztBQUFBLFFBQXlCO0FBQUEsUUFBNkI7QUFBQSxRQUM1RDtBQUFBLFFBQWlDO0FBQUEsUUFBNEI7QUFBQSxNQUEyQztBQUFBLE1BQzFHLFNBQVM7QUFBQSxJQUNYLENBQUM7QUFBQSxJQUNELE1BQU07QUFBQSxFQUNSO0FBQ0YsQ0FBQzsiLAogICJuYW1lcyI6IFtdCn0K
