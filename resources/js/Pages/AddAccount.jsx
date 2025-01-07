import { Link } from "@inertiajs/react";

export default function AddAccount()
{
    return (
        <div className="">
            <form action="">
                <input type="text" placeholder="decrypting pin"/>
                <input type="text" placeholder="seed phrase"/>
                <input className="btn-submit" type="submit" />
            </form>            
            <Link className="btn-back" href="/account" as="button">Back</Link>
        </div>
    );
}