<?php


/**
 * Base class that represents a query for the 'AcheteurPublic' table.
 *
 * 
 *
 * @method CommonAcheteurPublicQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonAcheteurPublicQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonAcheteurPublicQuery orderByDenomination($order = Criteria::ASC) Order by the denomination column
 * @method CommonAcheteurPublicQuery orderByPrm($order = Criteria::ASC) Order by the prm column
 * @method CommonAcheteurPublicQuery orderByAdresse($order = Criteria::ASC) Order by the adresse column
 * @method CommonAcheteurPublicQuery orderByCp($order = Criteria::ASC) Order by the cp column
 * @method CommonAcheteurPublicQuery orderByVille($order = Criteria::ASC) Order by the ville column
 * @method CommonAcheteurPublicQuery orderByDept($order = Criteria::ASC) Order by the dept column
 * @method CommonAcheteurPublicQuery orderByTypeOrg($order = Criteria::ASC) Order by the type_org column
 * @method CommonAcheteurPublicQuery orderByTelephone($order = Criteria::ASC) Order by the telephone column
 * @method CommonAcheteurPublicQuery orderByFax($order = Criteria::ASC) Order by the fax column
 * @method CommonAcheteurPublicQuery orderByMail($order = Criteria::ASC) Order by the mail column
 * @method CommonAcheteurPublicQuery orderByUrl($order = Criteria::ASC) Order by the url column
 * @method CommonAcheteurPublicQuery orderByUrlAcheteur($order = Criteria::ASC) Order by the url_acheteur column
 * @method CommonAcheteurPublicQuery orderByFactureNumero($order = Criteria::ASC) Order by the facture_numero column
 * @method CommonAcheteurPublicQuery orderByFactureCode($order = Criteria::ASC) Order by the facture_code column
 * @method CommonAcheteurPublicQuery orderByFactureDenomination($order = Criteria::ASC) Order by the facture_denomination column
 * @method CommonAcheteurPublicQuery orderByFacturationService($order = Criteria::ASC) Order by the facturation_service column
 * @method CommonAcheteurPublicQuery orderByFactureAdresse($order = Criteria::ASC) Order by the facture_adresse column
 * @method CommonAcheteurPublicQuery orderByFactureCp($order = Criteria::ASC) Order by the facture_cp column
 * @method CommonAcheteurPublicQuery orderByFactureVille($order = Criteria::ASC) Order by the facture_ville column
 * @method CommonAcheteurPublicQuery orderByFacturePays($order = Criteria::ASC) Order by the facture_pays column
 * @method CommonAcheteurPublicQuery orderByIdAapc($order = Criteria::ASC) Order by the id_aapc column
 * @method CommonAcheteurPublicQuery orderByBoampLogin($order = Criteria::ASC) Order by the boamp_login column
 * @method CommonAcheteurPublicQuery orderByBoampPassword($order = Criteria::ASC) Order by the boamp_password column
 * @method CommonAcheteurPublicQuery orderByBoampMail($order = Criteria::ASC) Order by the boamp_mail column
 * @method CommonAcheteurPublicQuery orderByBoampTarget($order = Criteria::ASC) Order by the boamp_target column
 * @method CommonAcheteurPublicQuery orderByDefaultFormValues($order = Criteria::ASC) Order by the default_form_values column
 * @method CommonAcheteurPublicQuery orderByDefautFormAmBoamp($order = Criteria::ASC) Order by the defaut_form_am_boamp column
 * @method CommonAcheteurPublicQuery orderByDefautFormAmBoampJoue($order = Criteria::ASC) Order by the defaut_form_am_boamp_joue column
 * @method CommonAcheteurPublicQuery orderByDefautFormMapaBoamp($order = Criteria::ASC) Order by the defaut_form_mapa_boamp column
 * @method CommonAcheteurPublicQuery orderByDefautFormAconcours($order = Criteria::ASC) Order by the defaut_form_aconcours column
 * @method CommonAcheteurPublicQuery orderByDefautFormAsBoampJoue($order = Criteria::ASC) Order by the defaut_form_as_boamp_joue column
 * @method CommonAcheteurPublicQuery orderByDefautFormAaBoamp($order = Criteria::ASC) Order by the defaut_form_aa_boamp column
 * @method CommonAcheteurPublicQuery orderByDefautFormArMapaBoamp($order = Criteria::ASC) Order by the defaut_form_ar_mapa_boamp column
 * @method CommonAcheteurPublicQuery orderByDefautForm05Boamp($order = Criteria::ASC) Order by the defaut_form_05_boamp column
 * @method CommonAcheteurPublicQuery orderByDefautFormRect($order = Criteria::ASC) Order by the defaut_form_rect column
 * @method CommonAcheteurPublicQuery orderByDefautFormAaBoampJoue($order = Criteria::ASC) Order by the defaut_form_aa_boamp_joue column
 * @method CommonAcheteurPublicQuery orderByIdService($order = Criteria::ASC) Order by the id_service column
 * @method CommonAcheteurPublicQuery orderByLivraisonService($order = Criteria::ASC) Order by the livraison_service column
 * @method CommonAcheteurPublicQuery orderByLivraisonAdresse($order = Criteria::ASC) Order by the livraison_adresse column
 * @method CommonAcheteurPublicQuery orderByLivraisonCodePostal($order = Criteria::ASC) Order by the livraison_code_postal column
 * @method CommonAcheteurPublicQuery orderByLivraisonVille($order = Criteria::ASC) Order by the livraison_ville column
 * @method CommonAcheteurPublicQuery orderByLivraisonPays($order = Criteria::ASC) Order by the livraison_pays column
 * @method CommonAcheteurPublicQuery orderByTypePouvoirActivite($order = Criteria::ASC) Order by the type_pouvoir_activite column
 * @method CommonAcheteurPublicQuery orderByCodeNuts($order = Criteria::ASC) Order by the code_nuts column
 * @method CommonAcheteurPublicQuery orderByModalitesFinancement($order = Criteria::ASC) Order by the modalites_financement column
 * @method CommonAcheteurPublicQuery orderByMoniteurProvenance($order = Criteria::ASC) Order by the moniteur_provenance column
 * @method CommonAcheteurPublicQuery orderByCodeAccesLogiciel($order = Criteria::ASC) Order by the code_acces_logiciel column
 *
 * @method CommonAcheteurPublicQuery groupById() Group by the id column
 * @method CommonAcheteurPublicQuery groupByOrganisme() Group by the organisme column
 * @method CommonAcheteurPublicQuery groupByDenomination() Group by the denomination column
 * @method CommonAcheteurPublicQuery groupByPrm() Group by the prm column
 * @method CommonAcheteurPublicQuery groupByAdresse() Group by the adresse column
 * @method CommonAcheteurPublicQuery groupByCp() Group by the cp column
 * @method CommonAcheteurPublicQuery groupByVille() Group by the ville column
 * @method CommonAcheteurPublicQuery groupByDept() Group by the dept column
 * @method CommonAcheteurPublicQuery groupByTypeOrg() Group by the type_org column
 * @method CommonAcheteurPublicQuery groupByTelephone() Group by the telephone column
 * @method CommonAcheteurPublicQuery groupByFax() Group by the fax column
 * @method CommonAcheteurPublicQuery groupByMail() Group by the mail column
 * @method CommonAcheteurPublicQuery groupByUrl() Group by the url column
 * @method CommonAcheteurPublicQuery groupByUrlAcheteur() Group by the url_acheteur column
 * @method CommonAcheteurPublicQuery groupByFactureNumero() Group by the facture_numero column
 * @method CommonAcheteurPublicQuery groupByFactureCode() Group by the facture_code column
 * @method CommonAcheteurPublicQuery groupByFactureDenomination() Group by the facture_denomination column
 * @method CommonAcheteurPublicQuery groupByFacturationService() Group by the facturation_service column
 * @method CommonAcheteurPublicQuery groupByFactureAdresse() Group by the facture_adresse column
 * @method CommonAcheteurPublicQuery groupByFactureCp() Group by the facture_cp column
 * @method CommonAcheteurPublicQuery groupByFactureVille() Group by the facture_ville column
 * @method CommonAcheteurPublicQuery groupByFacturePays() Group by the facture_pays column
 * @method CommonAcheteurPublicQuery groupByIdAapc() Group by the id_aapc column
 * @method CommonAcheteurPublicQuery groupByBoampLogin() Group by the boamp_login column
 * @method CommonAcheteurPublicQuery groupByBoampPassword() Group by the boamp_password column
 * @method CommonAcheteurPublicQuery groupByBoampMail() Group by the boamp_mail column
 * @method CommonAcheteurPublicQuery groupByBoampTarget() Group by the boamp_target column
 * @method CommonAcheteurPublicQuery groupByDefaultFormValues() Group by the default_form_values column
 * @method CommonAcheteurPublicQuery groupByDefautFormAmBoamp() Group by the defaut_form_am_boamp column
 * @method CommonAcheteurPublicQuery groupByDefautFormAmBoampJoue() Group by the defaut_form_am_boamp_joue column
 * @method CommonAcheteurPublicQuery groupByDefautFormMapaBoamp() Group by the defaut_form_mapa_boamp column
 * @method CommonAcheteurPublicQuery groupByDefautFormAconcours() Group by the defaut_form_aconcours column
 * @method CommonAcheteurPublicQuery groupByDefautFormAsBoampJoue() Group by the defaut_form_as_boamp_joue column
 * @method CommonAcheteurPublicQuery groupByDefautFormAaBoamp() Group by the defaut_form_aa_boamp column
 * @method CommonAcheteurPublicQuery groupByDefautFormArMapaBoamp() Group by the defaut_form_ar_mapa_boamp column
 * @method CommonAcheteurPublicQuery groupByDefautForm05Boamp() Group by the defaut_form_05_boamp column
 * @method CommonAcheteurPublicQuery groupByDefautFormRect() Group by the defaut_form_rect column
 * @method CommonAcheteurPublicQuery groupByDefautFormAaBoampJoue() Group by the defaut_form_aa_boamp_joue column
 * @method CommonAcheteurPublicQuery groupByIdService() Group by the id_service column
 * @method CommonAcheteurPublicQuery groupByLivraisonService() Group by the livraison_service column
 * @method CommonAcheteurPublicQuery groupByLivraisonAdresse() Group by the livraison_adresse column
 * @method CommonAcheteurPublicQuery groupByLivraisonCodePostal() Group by the livraison_code_postal column
 * @method CommonAcheteurPublicQuery groupByLivraisonVille() Group by the livraison_ville column
 * @method CommonAcheteurPublicQuery groupByLivraisonPays() Group by the livraison_pays column
 * @method CommonAcheteurPublicQuery groupByTypePouvoirActivite() Group by the type_pouvoir_activite column
 * @method CommonAcheteurPublicQuery groupByCodeNuts() Group by the code_nuts column
 * @method CommonAcheteurPublicQuery groupByModalitesFinancement() Group by the modalites_financement column
 * @method CommonAcheteurPublicQuery groupByMoniteurProvenance() Group by the moniteur_provenance column
 * @method CommonAcheteurPublicQuery groupByCodeAccesLogiciel() Group by the code_acces_logiciel column
 *
 * @method CommonAcheteurPublicQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonAcheteurPublicQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonAcheteurPublicQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonAcheteurPublic findOne(PropelPDO $con = null) Return the first CommonAcheteurPublic matching the query
 * @method CommonAcheteurPublic findOneOrCreate(PropelPDO $con = null) Return the first CommonAcheteurPublic matching the query, or a new CommonAcheteurPublic object populated from the query conditions when no match is found
 *
 * @method CommonAcheteurPublic findOneById(int $id) Return the first CommonAcheteurPublic filtered by the id column
 * @method CommonAcheteurPublic findOneByOrganisme(string $organisme) Return the first CommonAcheteurPublic filtered by the organisme column
 * @method CommonAcheteurPublic findOneByDenomination(string $denomination) Return the first CommonAcheteurPublic filtered by the denomination column
 * @method CommonAcheteurPublic findOneByPrm(string $prm) Return the first CommonAcheteurPublic filtered by the prm column
 * @method CommonAcheteurPublic findOneByAdresse(string $adresse) Return the first CommonAcheteurPublic filtered by the adresse column
 * @method CommonAcheteurPublic findOneByCp(string $cp) Return the first CommonAcheteurPublic filtered by the cp column
 * @method CommonAcheteurPublic findOneByVille(string $ville) Return the first CommonAcheteurPublic filtered by the ville column
 * @method CommonAcheteurPublic findOneByDept(string $dept) Return the first CommonAcheteurPublic filtered by the dept column
 * @method CommonAcheteurPublic findOneByTypeOrg(string $type_org) Return the first CommonAcheteurPublic filtered by the type_org column
 * @method CommonAcheteurPublic findOneByTelephone(string $telephone) Return the first CommonAcheteurPublic filtered by the telephone column
 * @method CommonAcheteurPublic findOneByFax(string $fax) Return the first CommonAcheteurPublic filtered by the fax column
 * @method CommonAcheteurPublic findOneByMail(string $mail) Return the first CommonAcheteurPublic filtered by the mail column
 * @method CommonAcheteurPublic findOneByUrl(string $url) Return the first CommonAcheteurPublic filtered by the url column
 * @method CommonAcheteurPublic findOneByUrlAcheteur(string $url_acheteur) Return the first CommonAcheteurPublic filtered by the url_acheteur column
 * @method CommonAcheteurPublic findOneByFactureNumero(string $facture_numero) Return the first CommonAcheteurPublic filtered by the facture_numero column
 * @method CommonAcheteurPublic findOneByFactureCode(string $facture_code) Return the first CommonAcheteurPublic filtered by the facture_code column
 * @method CommonAcheteurPublic findOneByFactureDenomination(string $facture_denomination) Return the first CommonAcheteurPublic filtered by the facture_denomination column
 * @method CommonAcheteurPublic findOneByFacturationService(string $facturation_service) Return the first CommonAcheteurPublic filtered by the facturation_service column
 * @method CommonAcheteurPublic findOneByFactureAdresse(string $facture_adresse) Return the first CommonAcheteurPublic filtered by the facture_adresse column
 * @method CommonAcheteurPublic findOneByFactureCp(string $facture_cp) Return the first CommonAcheteurPublic filtered by the facture_cp column
 * @method CommonAcheteurPublic findOneByFactureVille(string $facture_ville) Return the first CommonAcheteurPublic filtered by the facture_ville column
 * @method CommonAcheteurPublic findOneByFacturePays(string $facture_pays) Return the first CommonAcheteurPublic filtered by the facture_pays column
 * @method CommonAcheteurPublic findOneByIdAapc(int $id_aapc) Return the first CommonAcheteurPublic filtered by the id_aapc column
 * @method CommonAcheteurPublic findOneByBoampLogin(string $boamp_login) Return the first CommonAcheteurPublic filtered by the boamp_login column
 * @method CommonAcheteurPublic findOneByBoampPassword(string $boamp_password) Return the first CommonAcheteurPublic filtered by the boamp_password column
 * @method CommonAcheteurPublic findOneByBoampMail(string $boamp_mail) Return the first CommonAcheteurPublic filtered by the boamp_mail column
 * @method CommonAcheteurPublic findOneByBoampTarget(string $boamp_target) Return the first CommonAcheteurPublic filtered by the boamp_target column
 * @method CommonAcheteurPublic findOneByDefaultFormValues(string $default_form_values) Return the first CommonAcheteurPublic filtered by the default_form_values column
 * @method CommonAcheteurPublic findOneByDefautFormAmBoamp(string $defaut_form_am_boamp) Return the first CommonAcheteurPublic filtered by the defaut_form_am_boamp column
 * @method CommonAcheteurPublic findOneByDefautFormAmBoampJoue(string $defaut_form_am_boamp_joue) Return the first CommonAcheteurPublic filtered by the defaut_form_am_boamp_joue column
 * @method CommonAcheteurPublic findOneByDefautFormMapaBoamp(string $defaut_form_mapa_boamp) Return the first CommonAcheteurPublic filtered by the defaut_form_mapa_boamp column
 * @method CommonAcheteurPublic findOneByDefautFormAconcours(string $defaut_form_aconcours) Return the first CommonAcheteurPublic filtered by the defaut_form_aconcours column
 * @method CommonAcheteurPublic findOneByDefautFormAsBoampJoue(string $defaut_form_as_boamp_joue) Return the first CommonAcheteurPublic filtered by the defaut_form_as_boamp_joue column
 * @method CommonAcheteurPublic findOneByDefautFormAaBoamp(string $defaut_form_aa_boamp) Return the first CommonAcheteurPublic filtered by the defaut_form_aa_boamp column
 * @method CommonAcheteurPublic findOneByDefautFormArMapaBoamp(string $defaut_form_ar_mapa_boamp) Return the first CommonAcheteurPublic filtered by the defaut_form_ar_mapa_boamp column
 * @method CommonAcheteurPublic findOneByDefautForm05Boamp(string $defaut_form_05_boamp) Return the first CommonAcheteurPublic filtered by the defaut_form_05_boamp column
 * @method CommonAcheteurPublic findOneByDefautFormRect(string $defaut_form_rect) Return the first CommonAcheteurPublic filtered by the defaut_form_rect column
 * @method CommonAcheteurPublic findOneByDefautFormAaBoampJoue(string $defaut_form_aa_boamp_joue) Return the first CommonAcheteurPublic filtered by the defaut_form_aa_boamp_joue column
 * @method CommonAcheteurPublic findOneByIdService(int $id_service) Return the first CommonAcheteurPublic filtered by the id_service column
 * @method CommonAcheteurPublic findOneByLivraisonService(string $livraison_service) Return the first CommonAcheteurPublic filtered by the livraison_service column
 * @method CommonAcheteurPublic findOneByLivraisonAdresse(string $livraison_adresse) Return the first CommonAcheteurPublic filtered by the livraison_adresse column
 * @method CommonAcheteurPublic findOneByLivraisonCodePostal(string $livraison_code_postal) Return the first CommonAcheteurPublic filtered by the livraison_code_postal column
 * @method CommonAcheteurPublic findOneByLivraisonVille(string $livraison_ville) Return the first CommonAcheteurPublic filtered by the livraison_ville column
 * @method CommonAcheteurPublic findOneByLivraisonPays(string $livraison_pays) Return the first CommonAcheteurPublic filtered by the livraison_pays column
 * @method CommonAcheteurPublic findOneByTypePouvoirActivite(string $type_pouvoir_activite) Return the first CommonAcheteurPublic filtered by the type_pouvoir_activite column
 * @method CommonAcheteurPublic findOneByCodeNuts(string $code_nuts) Return the first CommonAcheteurPublic filtered by the code_nuts column
 * @method CommonAcheteurPublic findOneByModalitesFinancement(string $modalites_financement) Return the first CommonAcheteurPublic filtered by the modalites_financement column
 * @method CommonAcheteurPublic findOneByMoniteurProvenance(int $moniteur_provenance) Return the first CommonAcheteurPublic filtered by the moniteur_provenance column
 * @method CommonAcheteurPublic findOneByCodeAccesLogiciel(string $code_acces_logiciel) Return the first CommonAcheteurPublic filtered by the code_acces_logiciel column
 *
 * @method array findById(int $id) Return CommonAcheteurPublic objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonAcheteurPublic objects filtered by the organisme column
 * @method array findByDenomination(string $denomination) Return CommonAcheteurPublic objects filtered by the denomination column
 * @method array findByPrm(string $prm) Return CommonAcheteurPublic objects filtered by the prm column
 * @method array findByAdresse(string $adresse) Return CommonAcheteurPublic objects filtered by the adresse column
 * @method array findByCp(string $cp) Return CommonAcheteurPublic objects filtered by the cp column
 * @method array findByVille(string $ville) Return CommonAcheteurPublic objects filtered by the ville column
 * @method array findByDept(string $dept) Return CommonAcheteurPublic objects filtered by the dept column
 * @method array findByTypeOrg(string $type_org) Return CommonAcheteurPublic objects filtered by the type_org column
 * @method array findByTelephone(string $telephone) Return CommonAcheteurPublic objects filtered by the telephone column
 * @method array findByFax(string $fax) Return CommonAcheteurPublic objects filtered by the fax column
 * @method array findByMail(string $mail) Return CommonAcheteurPublic objects filtered by the mail column
 * @method array findByUrl(string $url) Return CommonAcheteurPublic objects filtered by the url column
 * @method array findByUrlAcheteur(string $url_acheteur) Return CommonAcheteurPublic objects filtered by the url_acheteur column
 * @method array findByFactureNumero(string $facture_numero) Return CommonAcheteurPublic objects filtered by the facture_numero column
 * @method array findByFactureCode(string $facture_code) Return CommonAcheteurPublic objects filtered by the facture_code column
 * @method array findByFactureDenomination(string $facture_denomination) Return CommonAcheteurPublic objects filtered by the facture_denomination column
 * @method array findByFacturationService(string $facturation_service) Return CommonAcheteurPublic objects filtered by the facturation_service column
 * @method array findByFactureAdresse(string $facture_adresse) Return CommonAcheteurPublic objects filtered by the facture_adresse column
 * @method array findByFactureCp(string $facture_cp) Return CommonAcheteurPublic objects filtered by the facture_cp column
 * @method array findByFactureVille(string $facture_ville) Return CommonAcheteurPublic objects filtered by the facture_ville column
 * @method array findByFacturePays(string $facture_pays) Return CommonAcheteurPublic objects filtered by the facture_pays column
 * @method array findByIdAapc(int $id_aapc) Return CommonAcheteurPublic objects filtered by the id_aapc column
 * @method array findByBoampLogin(string $boamp_login) Return CommonAcheteurPublic objects filtered by the boamp_login column
 * @method array findByBoampPassword(string $boamp_password) Return CommonAcheteurPublic objects filtered by the boamp_password column
 * @method array findByBoampMail(string $boamp_mail) Return CommonAcheteurPublic objects filtered by the boamp_mail column
 * @method array findByBoampTarget(string $boamp_target) Return CommonAcheteurPublic objects filtered by the boamp_target column
 * @method array findByDefaultFormValues(string $default_form_values) Return CommonAcheteurPublic objects filtered by the default_form_values column
 * @method array findByDefautFormAmBoamp(string $defaut_form_am_boamp) Return CommonAcheteurPublic objects filtered by the defaut_form_am_boamp column
 * @method array findByDefautFormAmBoampJoue(string $defaut_form_am_boamp_joue) Return CommonAcheteurPublic objects filtered by the defaut_form_am_boamp_joue column
 * @method array findByDefautFormMapaBoamp(string $defaut_form_mapa_boamp) Return CommonAcheteurPublic objects filtered by the defaut_form_mapa_boamp column
 * @method array findByDefautFormAconcours(string $defaut_form_aconcours) Return CommonAcheteurPublic objects filtered by the defaut_form_aconcours column
 * @method array findByDefautFormAsBoampJoue(string $defaut_form_as_boamp_joue) Return CommonAcheteurPublic objects filtered by the defaut_form_as_boamp_joue column
 * @method array findByDefautFormAaBoamp(string $defaut_form_aa_boamp) Return CommonAcheteurPublic objects filtered by the defaut_form_aa_boamp column
 * @method array findByDefautFormArMapaBoamp(string $defaut_form_ar_mapa_boamp) Return CommonAcheteurPublic objects filtered by the defaut_form_ar_mapa_boamp column
 * @method array findByDefautForm05Boamp(string $defaut_form_05_boamp) Return CommonAcheteurPublic objects filtered by the defaut_form_05_boamp column
 * @method array findByDefautFormRect(string $defaut_form_rect) Return CommonAcheteurPublic objects filtered by the defaut_form_rect column
 * @method array findByDefautFormAaBoampJoue(string $defaut_form_aa_boamp_joue) Return CommonAcheteurPublic objects filtered by the defaut_form_aa_boamp_joue column
 * @method array findByIdService(int $id_service) Return CommonAcheteurPublic objects filtered by the id_service column
 * @method array findByLivraisonService(string $livraison_service) Return CommonAcheteurPublic objects filtered by the livraison_service column
 * @method array findByLivraisonAdresse(string $livraison_adresse) Return CommonAcheteurPublic objects filtered by the livraison_adresse column
 * @method array findByLivraisonCodePostal(string $livraison_code_postal) Return CommonAcheteurPublic objects filtered by the livraison_code_postal column
 * @method array findByLivraisonVille(string $livraison_ville) Return CommonAcheteurPublic objects filtered by the livraison_ville column
 * @method array findByLivraisonPays(string $livraison_pays) Return CommonAcheteurPublic objects filtered by the livraison_pays column
 * @method array findByTypePouvoirActivite(string $type_pouvoir_activite) Return CommonAcheteurPublic objects filtered by the type_pouvoir_activite column
 * @method array findByCodeNuts(string $code_nuts) Return CommonAcheteurPublic objects filtered by the code_nuts column
 * @method array findByModalitesFinancement(string $modalites_financement) Return CommonAcheteurPublic objects filtered by the modalites_financement column
 * @method array findByMoniteurProvenance(int $moniteur_provenance) Return CommonAcheteurPublic objects filtered by the moniteur_provenance column
 * @method array findByCodeAccesLogiciel(string $code_acces_logiciel) Return CommonAcheteurPublic objects filtered by the code_acces_logiciel column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonAcheteurPublicQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonAcheteurPublicQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonAcheteurPublic', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonAcheteurPublicQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonAcheteurPublicQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonAcheteurPublicQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonAcheteurPublicQuery) {
            return $criteria;
        }
        $query = new CommonAcheteurPublicQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query 
                         A Primary key composition: [$id, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonAcheteurPublic|CommonAcheteurPublic[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonAcheteurPublicPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonAcheteurPublicPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonAcheteurPublic A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `denomination`, `prm`, `adresse`, `cp`, `ville`, `dept`, `type_org`, `telephone`, `fax`, `mail`, `url`, `url_acheteur`, `facture_numero`, `facture_code`, `facture_denomination`, `facturation_service`, `facture_adresse`, `facture_cp`, `facture_ville`, `facture_pays`, `id_aapc`, `boamp_login`, `boamp_password`, `boamp_mail`, `boamp_target`, `default_form_values`, `defaut_form_am_boamp`, `defaut_form_am_boamp_joue`, `defaut_form_mapa_boamp`, `defaut_form_aconcours`, `defaut_form_as_boamp_joue`, `defaut_form_aa_boamp`, `defaut_form_ar_mapa_boamp`, `defaut_form_05_boamp`, `defaut_form_rect`, `defaut_form_aa_boamp_joue`, `id_service`, `livraison_service`, `livraison_adresse`, `livraison_code_postal`, `livraison_ville`, `livraison_pays`, `type_pouvoir_activite`, `code_nuts`, `modalites_financement`, `moniteur_provenance`, `code_acces_logiciel` FROM `AcheteurPublic` WHERE `id` = :p0 AND `organisme` = :p1';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonAcheteurPublic();
            $obj->hydrate($row);
            CommonAcheteurPublicPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return CommonAcheteurPublic|CommonAcheteurPublic[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonAcheteurPublic[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonAcheteurPublicPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonAcheteurPublicPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonAcheteurPublicPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonAcheteurPublicPeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonAcheteurPublicPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonAcheteurPublicPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the organisme column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganisme('fooValue');   // WHERE organisme = 'fooValue'
     * $query->filterByOrganisme('%fooValue%'); // WHERE organisme LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organisme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByOrganisme($organisme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($organisme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $organisme)) {
                $organisme = str_replace('*', '%', $organisme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the denomination column
     *
     * Example usage:
     * <code>
     * $query->filterByDenomination('fooValue');   // WHERE denomination = 'fooValue'
     * $query->filterByDenomination('%fooValue%'); // WHERE denomination LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denomination The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByDenomination($denomination = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denomination)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $denomination)) {
                $denomination = str_replace('*', '%', $denomination);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::DENOMINATION, $denomination, $comparison);
    }

    /**
     * Filter the query on the prm column
     *
     * Example usage:
     * <code>
     * $query->filterByPrm('fooValue');   // WHERE prm = 'fooValue'
     * $query->filterByPrm('%fooValue%'); // WHERE prm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByPrm($prm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prm)) {
                $prm = str_replace('*', '%', $prm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::PRM, $prm, $comparison);
    }

    /**
     * Filter the query on the adresse column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresse('fooValue');   // WHERE adresse = 'fooValue'
     * $query->filterByAdresse('%fooValue%'); // WHERE adresse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByAdresse($adresse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresse)) {
                $adresse = str_replace('*', '%', $adresse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::ADRESSE, $adresse, $comparison);
    }

    /**
     * Filter the query on the cp column
     *
     * Example usage:
     * <code>
     * $query->filterByCp('fooValue');   // WHERE cp = 'fooValue'
     * $query->filterByCp('%fooValue%'); // WHERE cp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByCp($cp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cp)) {
                $cp = str_replace('*', '%', $cp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::CP, $cp, $comparison);
    }

    /**
     * Filter the query on the ville column
     *
     * Example usage:
     * <code>
     * $query->filterByVille('fooValue');   // WHERE ville = 'fooValue'
     * $query->filterByVille('%fooValue%'); // WHERE ville LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ville The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByVille($ville = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ville)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ville)) {
                $ville = str_replace('*', '%', $ville);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::VILLE, $ville, $comparison);
    }

    /**
     * Filter the query on the dept column
     *
     * Example usage:
     * <code>
     * $query->filterByDept('fooValue');   // WHERE dept = 'fooValue'
     * $query->filterByDept('%fooValue%'); // WHERE dept LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dept The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByDept($dept = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dept)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dept)) {
                $dept = str_replace('*', '%', $dept);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::DEPT, $dept, $comparison);
    }

    /**
     * Filter the query on the type_org column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeOrg('fooValue');   // WHERE type_org = 'fooValue'
     * $query->filterByTypeOrg('%fooValue%'); // WHERE type_org LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeOrg The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByTypeOrg($typeOrg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeOrg)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeOrg)) {
                $typeOrg = str_replace('*', '%', $typeOrg);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::TYPE_ORG, $typeOrg, $comparison);
    }

    /**
     * Filter the query on the telephone column
     *
     * Example usage:
     * <code>
     * $query->filterByTelephone('fooValue');   // WHERE telephone = 'fooValue'
     * $query->filterByTelephone('%fooValue%'); // WHERE telephone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telephone The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByTelephone($telephone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telephone)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telephone)) {
                $telephone = str_replace('*', '%', $telephone);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::TELEPHONE, $telephone, $comparison);
    }

    /**
     * Filter the query on the fax column
     *
     * Example usage:
     * <code>
     * $query->filterByFax('fooValue');   // WHERE fax = 'fooValue'
     * $query->filterByFax('%fooValue%'); // WHERE fax LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fax The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByFax($fax = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fax)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fax)) {
                $fax = str_replace('*', '%', $fax);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::FAX, $fax, $comparison);
    }

    /**
     * Filter the query on the mail column
     *
     * Example usage:
     * <code>
     * $query->filterByMail('fooValue');   // WHERE mail = 'fooValue'
     * $query->filterByMail('%fooValue%'); // WHERE mail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByMail($mail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mail)) {
                $mail = str_replace('*', '%', $mail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::MAIL, $mail, $comparison);
    }

    /**
     * Filter the query on the url column
     *
     * Example usage:
     * <code>
     * $query->filterByUrl('fooValue');   // WHERE url = 'fooValue'
     * $query->filterByUrl('%fooValue%'); // WHERE url LIKE '%fooValue%'
     * </code>
     *
     * @param     string $url The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByUrl($url = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($url)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $url)) {
                $url = str_replace('*', '%', $url);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::URL, $url, $comparison);
    }

    /**
     * Filter the query on the url_acheteur column
     *
     * Example usage:
     * <code>
     * $query->filterByUrlAcheteur('fooValue');   // WHERE url_acheteur = 'fooValue'
     * $query->filterByUrlAcheteur('%fooValue%'); // WHERE url_acheteur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $urlAcheteur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByUrlAcheteur($urlAcheteur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($urlAcheteur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $urlAcheteur)) {
                $urlAcheteur = str_replace('*', '%', $urlAcheteur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::URL_ACHETEUR, $urlAcheteur, $comparison);
    }

    /**
     * Filter the query on the facture_numero column
     *
     * Example usage:
     * <code>
     * $query->filterByFactureNumero('fooValue');   // WHERE facture_numero = 'fooValue'
     * $query->filterByFactureNumero('%fooValue%'); // WHERE facture_numero LIKE '%fooValue%'
     * </code>
     *
     * @param     string $factureNumero The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByFactureNumero($factureNumero = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($factureNumero)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $factureNumero)) {
                $factureNumero = str_replace('*', '%', $factureNumero);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::FACTURE_NUMERO, $factureNumero, $comparison);
    }

    /**
     * Filter the query on the facture_code column
     *
     * Example usage:
     * <code>
     * $query->filterByFactureCode('fooValue');   // WHERE facture_code = 'fooValue'
     * $query->filterByFactureCode('%fooValue%'); // WHERE facture_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $factureCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByFactureCode($factureCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($factureCode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $factureCode)) {
                $factureCode = str_replace('*', '%', $factureCode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::FACTURE_CODE, $factureCode, $comparison);
    }

    /**
     * Filter the query on the facture_denomination column
     *
     * Example usage:
     * <code>
     * $query->filterByFactureDenomination('fooValue');   // WHERE facture_denomination = 'fooValue'
     * $query->filterByFactureDenomination('%fooValue%'); // WHERE facture_denomination LIKE '%fooValue%'
     * </code>
     *
     * @param     string $factureDenomination The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByFactureDenomination($factureDenomination = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($factureDenomination)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $factureDenomination)) {
                $factureDenomination = str_replace('*', '%', $factureDenomination);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::FACTURE_DENOMINATION, $factureDenomination, $comparison);
    }

    /**
     * Filter the query on the facturation_service column
     *
     * Example usage:
     * <code>
     * $query->filterByFacturationService('fooValue');   // WHERE facturation_service = 'fooValue'
     * $query->filterByFacturationService('%fooValue%'); // WHERE facturation_service LIKE '%fooValue%'
     * </code>
     *
     * @param     string $facturationService The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByFacturationService($facturationService = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($facturationService)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $facturationService)) {
                $facturationService = str_replace('*', '%', $facturationService);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::FACTURATION_SERVICE, $facturationService, $comparison);
    }

    /**
     * Filter the query on the facture_adresse column
     *
     * Example usage:
     * <code>
     * $query->filterByFactureAdresse('fooValue');   // WHERE facture_adresse = 'fooValue'
     * $query->filterByFactureAdresse('%fooValue%'); // WHERE facture_adresse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $factureAdresse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByFactureAdresse($factureAdresse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($factureAdresse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $factureAdresse)) {
                $factureAdresse = str_replace('*', '%', $factureAdresse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::FACTURE_ADRESSE, $factureAdresse, $comparison);
    }

    /**
     * Filter the query on the facture_cp column
     *
     * Example usage:
     * <code>
     * $query->filterByFactureCp('fooValue');   // WHERE facture_cp = 'fooValue'
     * $query->filterByFactureCp('%fooValue%'); // WHERE facture_cp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $factureCp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByFactureCp($factureCp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($factureCp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $factureCp)) {
                $factureCp = str_replace('*', '%', $factureCp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::FACTURE_CP, $factureCp, $comparison);
    }

    /**
     * Filter the query on the facture_ville column
     *
     * Example usage:
     * <code>
     * $query->filterByFactureVille('fooValue');   // WHERE facture_ville = 'fooValue'
     * $query->filterByFactureVille('%fooValue%'); // WHERE facture_ville LIKE '%fooValue%'
     * </code>
     *
     * @param     string $factureVille The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByFactureVille($factureVille = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($factureVille)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $factureVille)) {
                $factureVille = str_replace('*', '%', $factureVille);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::FACTURE_VILLE, $factureVille, $comparison);
    }

    /**
     * Filter the query on the facture_pays column
     *
     * Example usage:
     * <code>
     * $query->filterByFacturePays('fooValue');   // WHERE facture_pays = 'fooValue'
     * $query->filterByFacturePays('%fooValue%'); // WHERE facture_pays LIKE '%fooValue%'
     * </code>
     *
     * @param     string $facturePays The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByFacturePays($facturePays = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($facturePays)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $facturePays)) {
                $facturePays = str_replace('*', '%', $facturePays);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::FACTURE_PAYS, $facturePays, $comparison);
    }

    /**
     * Filter the query on the id_aapc column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAapc(1234); // WHERE id_aapc = 1234
     * $query->filterByIdAapc(array(12, 34)); // WHERE id_aapc IN (12, 34)
     * $query->filterByIdAapc(array('min' => 12)); // WHERE id_aapc >= 12
     * $query->filterByIdAapc(array('max' => 12)); // WHERE id_aapc <= 12
     * </code>
     *
     * @param     mixed $idAapc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByIdAapc($idAapc = null, $comparison = null)
    {
        if (is_array($idAapc)) {
            $useMinMax = false;
            if (isset($idAapc['min'])) {
                $this->addUsingAlias(CommonAcheteurPublicPeer::ID_AAPC, $idAapc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAapc['max'])) {
                $this->addUsingAlias(CommonAcheteurPublicPeer::ID_AAPC, $idAapc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::ID_AAPC, $idAapc, $comparison);
    }

    /**
     * Filter the query on the boamp_login column
     *
     * Example usage:
     * <code>
     * $query->filterByBoampLogin('fooValue');   // WHERE boamp_login = 'fooValue'
     * $query->filterByBoampLogin('%fooValue%'); // WHERE boamp_login LIKE '%fooValue%'
     * </code>
     *
     * @param     string $boampLogin The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByBoampLogin($boampLogin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($boampLogin)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $boampLogin)) {
                $boampLogin = str_replace('*', '%', $boampLogin);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::BOAMP_LOGIN, $boampLogin, $comparison);
    }

    /**
     * Filter the query on the boamp_password column
     *
     * Example usage:
     * <code>
     * $query->filterByBoampPassword('fooValue');   // WHERE boamp_password = 'fooValue'
     * $query->filterByBoampPassword('%fooValue%'); // WHERE boamp_password LIKE '%fooValue%'
     * </code>
     *
     * @param     string $boampPassword The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByBoampPassword($boampPassword = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($boampPassword)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $boampPassword)) {
                $boampPassword = str_replace('*', '%', $boampPassword);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::BOAMP_PASSWORD, $boampPassword, $comparison);
    }

    /**
     * Filter the query on the boamp_mail column
     *
     * Example usage:
     * <code>
     * $query->filterByBoampMail('fooValue');   // WHERE boamp_mail = 'fooValue'
     * $query->filterByBoampMail('%fooValue%'); // WHERE boamp_mail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $boampMail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByBoampMail($boampMail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($boampMail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $boampMail)) {
                $boampMail = str_replace('*', '%', $boampMail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::BOAMP_MAIL, $boampMail, $comparison);
    }

    /**
     * Filter the query on the boamp_target column
     *
     * Example usage:
     * <code>
     * $query->filterByBoampTarget('fooValue');   // WHERE boamp_target = 'fooValue'
     * $query->filterByBoampTarget('%fooValue%'); // WHERE boamp_target LIKE '%fooValue%'
     * </code>
     *
     * @param     string $boampTarget The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByBoampTarget($boampTarget = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($boampTarget)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $boampTarget)) {
                $boampTarget = str_replace('*', '%', $boampTarget);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::BOAMP_TARGET, $boampTarget, $comparison);
    }

    /**
     * Filter the query on the default_form_values column
     *
     * Example usage:
     * <code>
     * $query->filterByDefaultFormValues('fooValue');   // WHERE default_form_values = 'fooValue'
     * $query->filterByDefaultFormValues('%fooValue%'); // WHERE default_form_values LIKE '%fooValue%'
     * </code>
     *
     * @param     string $defaultFormValues The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByDefaultFormValues($defaultFormValues = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($defaultFormValues)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $defaultFormValues)) {
                $defaultFormValues = str_replace('*', '%', $defaultFormValues);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::DEFAULT_FORM_VALUES, $defaultFormValues, $comparison);
    }

    /**
     * Filter the query on the defaut_form_am_boamp column
     *
     * Example usage:
     * <code>
     * $query->filterByDefautFormAmBoamp('fooValue');   // WHERE defaut_form_am_boamp = 'fooValue'
     * $query->filterByDefautFormAmBoamp('%fooValue%'); // WHERE defaut_form_am_boamp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $defautFormAmBoamp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByDefautFormAmBoamp($defautFormAmBoamp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($defautFormAmBoamp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $defautFormAmBoamp)) {
                $defautFormAmBoamp = str_replace('*', '%', $defautFormAmBoamp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::DEFAUT_FORM_AM_BOAMP, $defautFormAmBoamp, $comparison);
    }

    /**
     * Filter the query on the defaut_form_am_boamp_joue column
     *
     * Example usage:
     * <code>
     * $query->filterByDefautFormAmBoampJoue('fooValue');   // WHERE defaut_form_am_boamp_joue = 'fooValue'
     * $query->filterByDefautFormAmBoampJoue('%fooValue%'); // WHERE defaut_form_am_boamp_joue LIKE '%fooValue%'
     * </code>
     *
     * @param     string $defautFormAmBoampJoue The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByDefautFormAmBoampJoue($defautFormAmBoampJoue = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($defautFormAmBoampJoue)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $defautFormAmBoampJoue)) {
                $defautFormAmBoampJoue = str_replace('*', '%', $defautFormAmBoampJoue);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::DEFAUT_FORM_AM_BOAMP_JOUE, $defautFormAmBoampJoue, $comparison);
    }

    /**
     * Filter the query on the defaut_form_mapa_boamp column
     *
     * Example usage:
     * <code>
     * $query->filterByDefautFormMapaBoamp('fooValue');   // WHERE defaut_form_mapa_boamp = 'fooValue'
     * $query->filterByDefautFormMapaBoamp('%fooValue%'); // WHERE defaut_form_mapa_boamp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $defautFormMapaBoamp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByDefautFormMapaBoamp($defautFormMapaBoamp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($defautFormMapaBoamp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $defautFormMapaBoamp)) {
                $defautFormMapaBoamp = str_replace('*', '%', $defautFormMapaBoamp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::DEFAUT_FORM_MAPA_BOAMP, $defautFormMapaBoamp, $comparison);
    }

    /**
     * Filter the query on the defaut_form_aconcours column
     *
     * Example usage:
     * <code>
     * $query->filterByDefautFormAconcours('fooValue');   // WHERE defaut_form_aconcours = 'fooValue'
     * $query->filterByDefautFormAconcours('%fooValue%'); // WHERE defaut_form_aconcours LIKE '%fooValue%'
     * </code>
     *
     * @param     string $defautFormAconcours The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByDefautFormAconcours($defautFormAconcours = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($defautFormAconcours)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $defautFormAconcours)) {
                $defautFormAconcours = str_replace('*', '%', $defautFormAconcours);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::DEFAUT_FORM_ACONCOURS, $defautFormAconcours, $comparison);
    }

    /**
     * Filter the query on the defaut_form_as_boamp_joue column
     *
     * Example usage:
     * <code>
     * $query->filterByDefautFormAsBoampJoue('fooValue');   // WHERE defaut_form_as_boamp_joue = 'fooValue'
     * $query->filterByDefautFormAsBoampJoue('%fooValue%'); // WHERE defaut_form_as_boamp_joue LIKE '%fooValue%'
     * </code>
     *
     * @param     string $defautFormAsBoampJoue The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByDefautFormAsBoampJoue($defautFormAsBoampJoue = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($defautFormAsBoampJoue)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $defautFormAsBoampJoue)) {
                $defautFormAsBoampJoue = str_replace('*', '%', $defautFormAsBoampJoue);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::DEFAUT_FORM_AS_BOAMP_JOUE, $defautFormAsBoampJoue, $comparison);
    }

    /**
     * Filter the query on the defaut_form_aa_boamp column
     *
     * Example usage:
     * <code>
     * $query->filterByDefautFormAaBoamp('fooValue');   // WHERE defaut_form_aa_boamp = 'fooValue'
     * $query->filterByDefautFormAaBoamp('%fooValue%'); // WHERE defaut_form_aa_boamp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $defautFormAaBoamp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByDefautFormAaBoamp($defautFormAaBoamp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($defautFormAaBoamp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $defautFormAaBoamp)) {
                $defautFormAaBoamp = str_replace('*', '%', $defautFormAaBoamp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::DEFAUT_FORM_AA_BOAMP, $defautFormAaBoamp, $comparison);
    }

    /**
     * Filter the query on the defaut_form_ar_mapa_boamp column
     *
     * Example usage:
     * <code>
     * $query->filterByDefautFormArMapaBoamp('fooValue');   // WHERE defaut_form_ar_mapa_boamp = 'fooValue'
     * $query->filterByDefautFormArMapaBoamp('%fooValue%'); // WHERE defaut_form_ar_mapa_boamp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $defautFormArMapaBoamp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByDefautFormArMapaBoamp($defautFormArMapaBoamp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($defautFormArMapaBoamp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $defautFormArMapaBoamp)) {
                $defautFormArMapaBoamp = str_replace('*', '%', $defautFormArMapaBoamp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::DEFAUT_FORM_AR_MAPA_BOAMP, $defautFormArMapaBoamp, $comparison);
    }

    /**
     * Filter the query on the defaut_form_05_boamp column
     *
     * Example usage:
     * <code>
     * $query->filterByDefautForm05Boamp('fooValue');   // WHERE defaut_form_05_boamp = 'fooValue'
     * $query->filterByDefautForm05Boamp('%fooValue%'); // WHERE defaut_form_05_boamp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $defautForm05Boamp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByDefautForm05Boamp($defautForm05Boamp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($defautForm05Boamp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $defautForm05Boamp)) {
                $defautForm05Boamp = str_replace('*', '%', $defautForm05Boamp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::DEFAUT_FORM_05_BOAMP, $defautForm05Boamp, $comparison);
    }

    /**
     * Filter the query on the defaut_form_rect column
     *
     * Example usage:
     * <code>
     * $query->filterByDefautFormRect('fooValue');   // WHERE defaut_form_rect = 'fooValue'
     * $query->filterByDefautFormRect('%fooValue%'); // WHERE defaut_form_rect LIKE '%fooValue%'
     * </code>
     *
     * @param     string $defautFormRect The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByDefautFormRect($defautFormRect = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($defautFormRect)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $defautFormRect)) {
                $defautFormRect = str_replace('*', '%', $defautFormRect);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::DEFAUT_FORM_RECT, $defautFormRect, $comparison);
    }

    /**
     * Filter the query on the defaut_form_aa_boamp_joue column
     *
     * Example usage:
     * <code>
     * $query->filterByDefautFormAaBoampJoue('fooValue');   // WHERE defaut_form_aa_boamp_joue = 'fooValue'
     * $query->filterByDefautFormAaBoampJoue('%fooValue%'); // WHERE defaut_form_aa_boamp_joue LIKE '%fooValue%'
     * </code>
     *
     * @param     string $defautFormAaBoampJoue The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByDefautFormAaBoampJoue($defautFormAaBoampJoue = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($defautFormAaBoampJoue)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $defautFormAaBoampJoue)) {
                $defautFormAaBoampJoue = str_replace('*', '%', $defautFormAaBoampJoue);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::DEFAUT_FORM_AA_BOAMP_JOUE, $defautFormAaBoampJoue, $comparison);
    }

    /**
     * Filter the query on the id_service column
     *
     * Example usage:
     * <code>
     * $query->filterByIdService(1234); // WHERE id_service = 1234
     * $query->filterByIdService(array(12, 34)); // WHERE id_service IN (12, 34)
     * $query->filterByIdService(array('min' => 12)); // WHERE id_service >= 12
     * $query->filterByIdService(array('max' => 12)); // WHERE id_service <= 12
     * </code>
     *
     * @param     mixed $idService The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByIdService($idService = null, $comparison = null)
    {
        if (is_array($idService)) {
            $useMinMax = false;
            if (isset($idService['min'])) {
                $this->addUsingAlias(CommonAcheteurPublicPeer::ID_SERVICE, $idService['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idService['max'])) {
                $this->addUsingAlias(CommonAcheteurPublicPeer::ID_SERVICE, $idService['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::ID_SERVICE, $idService, $comparison);
    }

    /**
     * Filter the query on the livraison_service column
     *
     * Example usage:
     * <code>
     * $query->filterByLivraisonService('fooValue');   // WHERE livraison_service = 'fooValue'
     * $query->filterByLivraisonService('%fooValue%'); // WHERE livraison_service LIKE '%fooValue%'
     * </code>
     *
     * @param     string $livraisonService The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByLivraisonService($livraisonService = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($livraisonService)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $livraisonService)) {
                $livraisonService = str_replace('*', '%', $livraisonService);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::LIVRAISON_SERVICE, $livraisonService, $comparison);
    }

    /**
     * Filter the query on the livraison_adresse column
     *
     * Example usage:
     * <code>
     * $query->filterByLivraisonAdresse('fooValue');   // WHERE livraison_adresse = 'fooValue'
     * $query->filterByLivraisonAdresse('%fooValue%'); // WHERE livraison_adresse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $livraisonAdresse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByLivraisonAdresse($livraisonAdresse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($livraisonAdresse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $livraisonAdresse)) {
                $livraisonAdresse = str_replace('*', '%', $livraisonAdresse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::LIVRAISON_ADRESSE, $livraisonAdresse, $comparison);
    }

    /**
     * Filter the query on the livraison_code_postal column
     *
     * Example usage:
     * <code>
     * $query->filterByLivraisonCodePostal('fooValue');   // WHERE livraison_code_postal = 'fooValue'
     * $query->filterByLivraisonCodePostal('%fooValue%'); // WHERE livraison_code_postal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $livraisonCodePostal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByLivraisonCodePostal($livraisonCodePostal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($livraisonCodePostal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $livraisonCodePostal)) {
                $livraisonCodePostal = str_replace('*', '%', $livraisonCodePostal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::LIVRAISON_CODE_POSTAL, $livraisonCodePostal, $comparison);
    }

    /**
     * Filter the query on the livraison_ville column
     *
     * Example usage:
     * <code>
     * $query->filterByLivraisonVille('fooValue');   // WHERE livraison_ville = 'fooValue'
     * $query->filterByLivraisonVille('%fooValue%'); // WHERE livraison_ville LIKE '%fooValue%'
     * </code>
     *
     * @param     string $livraisonVille The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByLivraisonVille($livraisonVille = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($livraisonVille)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $livraisonVille)) {
                $livraisonVille = str_replace('*', '%', $livraisonVille);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::LIVRAISON_VILLE, $livraisonVille, $comparison);
    }

    /**
     * Filter the query on the livraison_pays column
     *
     * Example usage:
     * <code>
     * $query->filterByLivraisonPays('fooValue');   // WHERE livraison_pays = 'fooValue'
     * $query->filterByLivraisonPays('%fooValue%'); // WHERE livraison_pays LIKE '%fooValue%'
     * </code>
     *
     * @param     string $livraisonPays The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByLivraisonPays($livraisonPays = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($livraisonPays)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $livraisonPays)) {
                $livraisonPays = str_replace('*', '%', $livraisonPays);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::LIVRAISON_PAYS, $livraisonPays, $comparison);
    }

    /**
     * Filter the query on the type_pouvoir_activite column
     *
     * Example usage:
     * <code>
     * $query->filterByTypePouvoirActivite('fooValue');   // WHERE type_pouvoir_activite = 'fooValue'
     * $query->filterByTypePouvoirActivite('%fooValue%'); // WHERE type_pouvoir_activite LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typePouvoirActivite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByTypePouvoirActivite($typePouvoirActivite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typePouvoirActivite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typePouvoirActivite)) {
                $typePouvoirActivite = str_replace('*', '%', $typePouvoirActivite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::TYPE_POUVOIR_ACTIVITE, $typePouvoirActivite, $comparison);
    }

    /**
     * Filter the query on the code_nuts column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeNuts('fooValue');   // WHERE code_nuts = 'fooValue'
     * $query->filterByCodeNuts('%fooValue%'); // WHERE code_nuts LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codeNuts The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByCodeNuts($codeNuts = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeNuts)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codeNuts)) {
                $codeNuts = str_replace('*', '%', $codeNuts);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::CODE_NUTS, $codeNuts, $comparison);
    }

    /**
     * Filter the query on the modalites_financement column
     *
     * Example usage:
     * <code>
     * $query->filterByModalitesFinancement('fooValue');   // WHERE modalites_financement = 'fooValue'
     * $query->filterByModalitesFinancement('%fooValue%'); // WHERE modalites_financement LIKE '%fooValue%'
     * </code>
     *
     * @param     string $modalitesFinancement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByModalitesFinancement($modalitesFinancement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modalitesFinancement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $modalitesFinancement)) {
                $modalitesFinancement = str_replace('*', '%', $modalitesFinancement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::MODALITES_FINANCEMENT, $modalitesFinancement, $comparison);
    }

    /**
     * Filter the query on the moniteur_provenance column
     *
     * Example usage:
     * <code>
     * $query->filterByMoniteurProvenance(1234); // WHERE moniteur_provenance = 1234
     * $query->filterByMoniteurProvenance(array(12, 34)); // WHERE moniteur_provenance IN (12, 34)
     * $query->filterByMoniteurProvenance(array('min' => 12)); // WHERE moniteur_provenance >= 12
     * $query->filterByMoniteurProvenance(array('max' => 12)); // WHERE moniteur_provenance <= 12
     * </code>
     *
     * @param     mixed $moniteurProvenance The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByMoniteurProvenance($moniteurProvenance = null, $comparison = null)
    {
        if (is_array($moniteurProvenance)) {
            $useMinMax = false;
            if (isset($moniteurProvenance['min'])) {
                $this->addUsingAlias(CommonAcheteurPublicPeer::MONITEUR_PROVENANCE, $moniteurProvenance['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($moniteurProvenance['max'])) {
                $this->addUsingAlias(CommonAcheteurPublicPeer::MONITEUR_PROVENANCE, $moniteurProvenance['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::MONITEUR_PROVENANCE, $moniteurProvenance, $comparison);
    }

    /**
     * Filter the query on the code_acces_logiciel column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeAccesLogiciel('fooValue');   // WHERE code_acces_logiciel = 'fooValue'
     * $query->filterByCodeAccesLogiciel('%fooValue%'); // WHERE code_acces_logiciel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codeAccesLogiciel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function filterByCodeAccesLogiciel($codeAccesLogiciel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeAccesLogiciel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codeAccesLogiciel)) {
                $codeAccesLogiciel = str_replace('*', '%', $codeAccesLogiciel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAcheteurPublicPeer::CODE_ACCES_LOGICIEL, $codeAccesLogiciel, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonAcheteurPublic $commonAcheteurPublic Object to remove from the list of results
     *
     * @return CommonAcheteurPublicQuery The current query, for fluid interface
     */
    public function prune($commonAcheteurPublic = null)
    {
        if ($commonAcheteurPublic) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonAcheteurPublicPeer::ID), $commonAcheteurPublic->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonAcheteurPublicPeer::ORGANISME), $commonAcheteurPublic->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
