import {Link} from '@inertiajs/react'

export default function Home()
{
    return(
        <div>
            <h1 className="txt-header">Hello!</h1>
            <div className="center-ancacc">
                <Link as="button" href="/account" className="anchor-acc">ACCOUNT</Link>
            </div>            
        </div>
    )
}