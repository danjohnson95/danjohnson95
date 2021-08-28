import * as React from "react"
import Layout from "../components/layout"
import Seo from "../components/seo"
import Me from '../images/me.jpg'

const technologies = [
  'Javascript',
  'Typescript',
  'PHP',
  'Swift',
  'K8s',
]

const interests = [
  'Running 🏃‍♂️',
  'Cooking 🍳',
  'Español 🇪🇸',
  'Travelling 🌎',
]

const IndexPage: React.FC = () => (
  <Layout>
    <Seo title="Home" />
    <div className="text-center md:text-left flex flex-col flex-col-reverse md:flex-row justify-between items-center mt-20">
      <div className="space-y-4">
        <h1 className="text-5xl font-extrabold">Hi, I'm <span className="text-transparent bg-clip-text bg-gradient-to-br from-pink-400 to-red-600">Dan Johnson</span></h1>
        <h2 className="text-xl font-bold text-gray-700">
          <div>and I'm a software engineer</div>
          <div className="text-sm font-medium">with 8 years commercial experience, and expertise in design.</div>
        </h2>
        <div className="text-xs font-medium space-y-2">
          <div className="flex space-x-2 justify-center md:justify-start">
            {technologies.map(tech => (
              <span key={tech} className="rounded-xl bg-gray-100 text-gray-500 px-3 py-1">{tech}</span>
            ))}
          </div>
          <div className="flex space-x-2 justify-center md:justify-start">
            {interests.map(interest => (
              <span className="rounded-xl bg-gray-100 text-gray-500 px-3 py-1">{interest}</span>
            ))}
          </div>
        </div>
        <div className="flex space-x-2 text-xs font-medium">
        </div>
        <div className="flex space-x-3 mt-6 justify-center md:justify-start">
          <a href="https://github.com/danjohnson95" target="_blank" title="GitHub - danjohnson95">
            <svg xmlns="http://www.w3.org/2000/svg" className="h-6 w-6 text-gray-300" viewBox="0 0 1024 1024" fill="currentColor">
              <path fillRule="evenodd" clipRule="evenodd" d="M8 0C3.58 0 0 3.58 0 8C0 11.54 2.29 14.53 5.47 15.59C5.87 15.66 6.02 15.42 6.02 15.21C6.02 15.02 6.01 14.39 6.01 13.72C4 14.09 3.48 13.23 3.32 12.78C3.23 12.55 2.84 11.84 2.5 11.65C2.22 11.5 1.82 11.13 2.49 11.12C3.12 11.11 3.57 11.7 3.72 11.94C4.44 13.15 5.59 12.81 6.05 12.6C6.12 12.08 6.33 11.73 6.56 11.53C4.78 11.33 2.92 10.64 2.92 7.58C2.92 6.71 3.23 5.99 3.74 5.43C3.66 5.23 3.38 4.41 3.82 3.31C3.82 3.31 4.49 3.1 6.02 4.13C6.66 3.95 7.34 3.86 8.02 3.86C8.7 3.86 9.38 3.95 10.02 4.13C11.55 3.09 12.22 3.31 12.22 3.31C12.66 4.41 12.38 5.23 12.3 5.43C12.81 5.99 13.12 6.7 13.12 7.58C13.12 10.65 11.25 11.33 9.47 11.53C9.76 11.78 10.01 12.26 10.01 13.01C10.01 14.08 10 14.94 10 15.21C10 15.42 10.15 15.67 10.55 15.59C13.71 14.53 16 11.53 16 8C16 3.58 12.42 0 8 0Z" transform="scale(64)"/>
            </svg>
          </a>
          <a href="https://linkedin.com/in/danjohnson00" target="_blank" title="LinkedIn - danjohnson00">
            <svg xmlns="http://www.w3.org/2000/svg" className="h-6 w-6 text-gray-300" viewBox="0 0 24 24" fill="currentColor">
              <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
            </svg>
          </a>
          <a href="https://www.strava.com/athletes/52580846" target="_blank" title="Strava - 52580846">
            <svg xmlns="http://www.w3.org/2000/svg" className="h-6 w-6 text-gray-300" viewBox="0 0 512 512" fill="currentColor">
              <polygon points="226.172,26.001 90.149,288.345 170.29,288.345 226.172,184.036 281.605,288.345     361.116,288.345   "/>
              <polygon points="361.116,288.345 321.675,367.586 281.605,288.345 220.871,288.345 321.675,485.999     421.851,288.345   "/>
            </svg>
          </a>
        </div>
      </div>
      <img src={Me} alt="Me" className="rounded-full mb-6 md:mb-0 w-48 md:w-60"/>
    </div>
  </Layout>
)

export default IndexPage
