import app from './app'

app.listen(process.env.PORT ?? 3000, () => {
  console.log('⚡️[server]: Server is running at http://localhost:3000')
})