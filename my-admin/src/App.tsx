import { OpenApiAdmin } from "@api-platform/admin";

// Replace with your own API entrypoint
export const App = () => (
    <OpenApiAdmin
        entrypoint="https://localhost/api"
        docEntrypoint="https://localhost/api/docs.jsonopenapi"
    />
);






// Original file:
//import { Admin } from "react-admin";
//import { Layout } from "./Layout";

//export const App = () => <Admin layout={Layout}></Admin>;
