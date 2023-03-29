import { indexRouter } from './routes'
import express, { type NextFunction, type Request, type Response } from 'express'
import nunjucks from 'nunjucks'

const app = express()
app.disable('x-powered-by')

// Apply Middleware to app
app.use(express.static('public'))
app.use(express.urlencoded({ extended: false }))

// Configure Nunjucks view engine
const njk = nunjucks.configure('views', {
  autoescape: true,
  express: app,
})

njk.addFilter('date', require('nunjucks-date-filter'))

app.set('view engine', 'nunjucks')

// --- Define all apps routes here ---
app.use('/', indexRouter)


app.get('*', (req: Request, res: Response) => {
  res.status(404).render('404.njk')
})

// Catch all error here https://expressjs.com/en/guide/error-handling.html
app.use((err: Error, req: Request, res: Response, next: NextFunction) => {
  console.error(err.stack)
  res.status(500).send('Something broke!')
})

export default app
