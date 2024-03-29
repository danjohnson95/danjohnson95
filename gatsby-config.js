module.exports = {
  siteMetadata: {
    title: `Dan Johnson`,
    description: `Hi, I'm Dan Johnson and I'm a software engineer with 8 years commercial experience, and expertise in design.`,
    aboutMe: {
      jobTitle: "Software Engineer",
      technologies: [
        'Javascript',
        'Typescript',
        'PHP',
        'Swift',
        'K8s',
      ],
      interests: [
        'Running 🏃‍♂️',
        'Cooking 🍳',
        'Español 🇪🇸',
        'Travelling 🌎',
      ],
    },
  },
  plugins: [
    `gatsby-plugin-react-helmet`,
    `gatsby-plugin-image`,
    {
      resolve: `gatsby-source-filesystem`,
      options: {
        name: `images`,
        path: `${__dirname}/src/images`,
      },
    },
    `gatsby-transformer-sharp`,
    `gatsby-plugin-sharp`,
    {
      resolve: `gatsby-plugin-manifest`,
      options: {
        name: `gatsby-starter-default`,
        short_name: `starter`,
        start_url: `/`,
        background_color: `#663399`,
        theme_color: `#663399`,
        display: `minimal-ui`,
        icon: `src/images/gatsby-icon.png`, // This path is relative to the root of the site.
      },
    },
    `gatsby-plugin-gatsby-cloud`,
    // this (optional) plugin enables Progressive Web App + Offline functionality
    // To learn more, visit: https://gatsby.dev/offline
    // `gatsby-plugin-offline`,
    `gatsby-plugin-postcss`,
  ],
}
