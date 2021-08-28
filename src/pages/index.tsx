import * as React from "react"
import Layout from "../components/layout"
import Seo from "../components/seo"
import Me from '../images/me.jpg'

const IndexPage: React.FC = () => (
  <Layout>
    <Seo title="Home" />
    <div className="flex justify-between items-center mt-20">
      <div className="space-y-2">
        <h1 className="text-5xl font-extrabold">Hi, I'm <span className="text-transparent bg-clip-text bg-gradient-to-br from-pink-400 to-red-600">Dan Johnson</span></h1>
        <h2 className="text-xl font-bold text-gray-700">and I'm a software engineer</h2>
        <div className="flex space-x-2 text-xs font-medium uppercase">
          <span className="rounded-xl bg-gray-100 text-gray-500 px-3 py-1">Javascript</span>
          <span className="rounded-xl bg-gray-100 text-gray-500 px-3 py-1">Typescript</span>
          <span className="rounded-xl bg-gray-100 text-gray-500 px-3 py-1">PHP</span>
          <span className="rounded-xl bg-gray-100 text-gray-500 px-3 py-1">Swift</span>
          <span className="rounded-xl bg-gray-100 text-gray-500 px-3 py-1">K8s</span>
        </div>
        <div className="flex space-x-2 items-center text-sm">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
          <span className="text-gray-600 font-medium">London, UK</span>
        </div>
      </div>
      <img src={Me} alt="Me" width={300} className="rounded-full"/>
    </div>
  </Layout>
)

export default IndexPage
