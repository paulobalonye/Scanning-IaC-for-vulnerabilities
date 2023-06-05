import {
  createBrowserRouter,
  Outlet,
  RouterProvider,
} from 'react-router-dom';
import { lazy, Suspense } from 'react';
import './index.css';
const Home = lazy(() => import('./components/Home'));

const router = createBrowserRouter([
  {
    path: '/',
    element: <Home />,
  },
]);

function App() {
  return (
    <div className="App">
      <Suspense
        fallback={
          <div className="w-screen h-screen flex justify-center bg-gray-300 opacity-70 backdrop-blur-md items-center">
            <svg
              className="animate-spin h-half w-half  ..."
              viewBox="0 0 24 24"
            ></svg>
          </div>
        }
      >
        <RouterProvider router={router} />
      </Suspense>
      <Outlet />
    </div>
  );
}

export default App;
