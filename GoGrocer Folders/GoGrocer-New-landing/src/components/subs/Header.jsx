import logo from '../../assets/logo.svg';
import { useState } from 'react';
import menu from '../../assets/menu.svg';
import ham from '../../assets/cancel.svg';
import { NavLink } from 'react-router-dom';

export default function Header() {
  const [open, setOpen] = useState(false);
  return (
    <header className="sticky top-0 left-0 z-[9999] border-b bg-white shadow-md px-5 md:px-20 py-5 flex justify-between items-center">
      <NavLink to="/">
        <img src={logo} alt="" className="h-12 md:h-14 object-cover" />
      </NavLink>

      <button className="bg-primary  text-white rounded-lg font-[500] px-3 md:px-5 h-10">
        Join Waitlist
      </button>
      <img
        src={open ? ham : menu}
        alt=""
        onClick={() => setOpen(!open)}
        className="hidden transition-all duration-1000 ease-in-out"
      />
    </header>
  );
}
