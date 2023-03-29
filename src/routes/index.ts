import { type Request, type Response, Router } from 'express'
export const indexRouter = Router()

indexRouter.get('/', (req: Request, res: Response) => {
  res.render('index.njk')
})