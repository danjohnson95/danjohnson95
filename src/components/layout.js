import * as React from "react"
import PropTypes from "prop-types"

const Layout = ({ children }) => (
  <>
    <div className="max-w-4xl px-4 lg:px-0 mx-auto">
      <main className="w-full">{children}</main>
    </div>
  </>
)

Layout.propTypes = {
  children: PropTypes.node.isRequired,
}

export default Layout
