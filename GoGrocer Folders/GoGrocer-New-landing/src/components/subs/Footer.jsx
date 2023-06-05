import logo from '../../assets/logo.svg';
export default function Footer() {
  return (
    <footer className="text-light px-5 py-3 md:py-7 flex flex-col md:flex-row items-center justify-center gap-2">
      <img src={logo} alt="" className="h-10" /> Copyright © 2023. All
      right reserved
    </footer>
  );
}
