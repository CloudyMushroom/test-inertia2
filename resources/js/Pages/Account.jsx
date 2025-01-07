import { Link } from "@inertiajs/react"

export default function Account()
{
    return (
        <div>
            <h1 className="txt-account">Account Page</h1>
            <div className="center-ancadd">
                <Link href="/addaccount" className="anchor-add"as="button">Add Account</Link>
            </div>
            
        </div>
    )
}