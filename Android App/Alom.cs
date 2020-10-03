using UnityEngine;
using UnityEngine.UI;
using System.Collections;
public class Alom : MonoBehaviour
{
    public Image nav;
    public void navStart()
    {
        if (!nav.gameObject.active)
        {
            nav.gameObject.SetActive(true);
            StartCoroutine(startSlide(0.1f));
        }
        else if (nav.gameObject.active)
        {
            StartCoroutine(startSlide(-0.1f));

        }
    }
    IEnumerator startSlide(float i)
    {
        yield return new WaitForSeconds(0.01f);
        nav.fillAmount = nav.fillAmount + i;
        if (nav.fillAmount < 1 && nav.fillAmount > 0)
        {
            StartCoroutine(startSlide(i));
        }
        else if (nav.fillAmount == 0)
        {
            nav.gameObject.SetActive(false);

        }
    }

}
