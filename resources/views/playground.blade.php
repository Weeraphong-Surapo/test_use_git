<!DOCTYPE html>
<html>
<head>
  <title>GraphQL Sandbox</title>
  <link rel="stylesheet" href="https://unpkg.com/@apollo/sandbox@latest/dist/sandbox.css" />
</head>
<body style="margin:0">
  <div id="sandbox"></div>

  <script src="https://unpkg.com/@apollo/sandbox@latest/dist/sandbox.umd.js"></script>
  <script>
    new window.ApolloSandbox({
      target: "#sandbox",
      initialEndpoint: "/graphql"
    });
  </script>
</body>
</html>