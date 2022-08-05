<?php


/**
 * Base class that represents a query for the 'entite' table.
 *
 * 
 *
 * @method EntiteQuery orderByIdEntite($order = Criteria::ASC) Order by the ID_ENTITE column
 * @method EntiteQuery orderByDenominationFr($order = Criteria::ASC) Order by the DENOMINATION_FR column
 * @method EntiteQuery orderByDenominationAr($order = Criteria::ASC) Order by the DENOMINATION_AR column
 * @method EntiteQuery orderByEtat($order = Criteria::ASC) Order by the ETAT column
 * @method EntiteQuery orderByTypeEntite($order = Criteria::ASC) Order by the TYPE_ENTITE column
 * @method EntiteQuery orderByMail($order = Criteria::ASC) Order by the mail column
 * @method EntiteQuery orderByTelephone($order = Criteria::ASC) Order by the telephone column
 * @method EntiteQuery orderByFax($order = Criteria::ASC) Order by the fax column
 * @method EntiteQuery orderByAdresse($order = Criteria::ASC) Order by the adresse column
 * @method EntiteQuery orderByAdresse2($order = Criteria::ASC) Order by the adresse2 column
 * @method EntiteQuery orderByCp($order = Criteria::ASC) Order by the cp column
 * @method EntiteQuery orderByVille($order = Criteria::ASC) Order by the ville column
 * @method EntiteQuery orderByPathFr($order = Criteria::ASC) Order by the path_fr column
 * @method EntiteQuery orderByPathAr($order = Criteria::ASC) Order by the path_ar column
 * @method EntiteQuery orderByIdRegion($order = Criteria::ASC) Order by the ID_REGION column
 * @method EntiteQuery orderByIdProvince($order = Criteria::ASC) Order by the ID_PROVINCE column
 * @method EntiteQuery orderByIdCommune($order = Criteria::ASC) Order by the ID_COMMUNE column
 * @method EntiteQuery orderByCommune($order = Criteria::ASC) Order by the COMMUNE column
 * @method EntiteQuery orderByIdPays($order = Criteria::ASC) Order by the ID_PAYS column
 * @method EntiteQuery orderBySigleFr($order = Criteria::ASC) Order by the SIGLE_FR column
 * @method EntiteQuery orderBySigleAr($order = Criteria::ASC) Order by the SIGLE_AR column
 * @method EntiteQuery orderByPathSigleFr($order = Criteria::ASC) Order by the PATH_SIGLE_FR column
 * @method EntiteQuery orderByPathSigleAr($order = Criteria::ASC) Order by the PATH_SIGLE_AR column
 * @method EntiteQuery orderByEntiteVisibleRequerant($order = Criteria::ASC) Order by the ENTITE_VISIBLE_REQUERANT column
 * @method EntiteQuery orderByIdEntiteReception($order = Criteria::ASC) Order by the ID_ENTITE_RECEPTION column
 * @method EntiteQuery orderByNiveau($order = Criteria::ASC) Order by the NIVEAU column
 * @method EntiteQuery orderByCodeMin($order = Criteria::ASC) Order by the CODE_MIN column
 * @method EntiteQuery orderByIdsEntiteEnCopie($order = Criteria::ASC) Order by the IDS_ENTITE_EN_COPIE column
 * @method EntiteQuery orderByNomDomaine($order = Criteria::ASC) Order by the NOM_DOMAINE column
 * @method EntiteQuery orderByAcronyme($order = Criteria::ASC) Order by the ACRONYME column
 * @method EntiteQuery orderBySupprime($order = Criteria::ASC) Order by the SUPPRIME column
 * @method EntiteQuery orderByEntiteTraitement($order = Criteria::ASC) Order by the ENTITE_TRAITEMENT column
 * @method EntiteQuery orderByEntitesAutorisees($order = Criteria::ASC) Order by the ENTITES_AUTORISEES column
 * @method EntiteQuery orderByCalculEntitesAutorisees($order = Criteria::ASC) Order by the CALCUL_ENTITES_AUTORISEES column
 * @method EntiteQuery orderByIdEntiteAffectationAutomatique($order = Criteria::ASC) Order by the ID_ENTITE_AFFECTATION_AUTOMATIQUE column
 * @method EntiteQuery orderByIdEntiteRelance($order = Criteria::ASC) Order by the ID_ENTITE_RELANCE column
 * @method EntiteQuery orderByCodeEntite($order = Criteria::ASC) Order by the CODE_ENTITE column
 * @method EntiteQuery orderByTelephonesCentreAppel($order = Criteria::ASC) Order by the TELEPHONES_CENTRE_APPEL column
 * @method EntiteQuery orderByHoraireCentreAppelAr($order = Criteria::ASC) Order by the HORAIRE_CENTRE_APPEL_AR column
 * @method EntiteQuery orderByHoraireCentreAppelFr($order = Criteria::ASC) Order by the HORAIRE_CENTRE_APPEL_FR column
 * @method EntiteQuery orderByDateModification($order = Criteria::ASC) Order by the DATE_MODIFICATION column
 * @method EntiteQuery orderByIdEntiteRecours($order = Criteria::ASC) Order by the ID_ENTITE_RECOURS column
 * @method EntiteQuery orderByIdentifiantEntiteReceptionWs($order = Criteria::ASC) Order by the IDENTIFIANT_ENTITE_RECEPTION_WS column
 * @method EntiteQuery orderByIdSocle($order = Criteria::ASC) Order by the ID_SOCLE column
 * @method EntiteQuery orderByIdExterne($order = Criteria::ASC) Order by the ID_EXTERNE column
 * @method EntiteQuery orderByIncrement($order = Criteria::ASC) Order by the INCREMENT column
 *
 * @method EntiteQuery groupByIdEntite() Group by the ID_ENTITE column
 * @method EntiteQuery groupByDenominationFr() Group by the DENOMINATION_FR column
 * @method EntiteQuery groupByDenominationAr() Group by the DENOMINATION_AR column
 * @method EntiteQuery groupByEtat() Group by the ETAT column
 * @method EntiteQuery groupByTypeEntite() Group by the TYPE_ENTITE column
 * @method EntiteQuery groupByMail() Group by the mail column
 * @method EntiteQuery groupByTelephone() Group by the telephone column
 * @method EntiteQuery groupByFax() Group by the fax column
 * @method EntiteQuery groupByAdresse() Group by the adresse column
 * @method EntiteQuery groupByAdresse2() Group by the adresse2 column
 * @method EntiteQuery groupByCp() Group by the cp column
 * @method EntiteQuery groupByVille() Group by the ville column
 * @method EntiteQuery groupByPathFr() Group by the path_fr column
 * @method EntiteQuery groupByPathAr() Group by the path_ar column
 * @method EntiteQuery groupByIdRegion() Group by the ID_REGION column
 * @method EntiteQuery groupByIdProvince() Group by the ID_PROVINCE column
 * @method EntiteQuery groupByIdCommune() Group by the ID_COMMUNE column
 * @method EntiteQuery groupByCommune() Group by the COMMUNE column
 * @method EntiteQuery groupByIdPays() Group by the ID_PAYS column
 * @method EntiteQuery groupBySigleFr() Group by the SIGLE_FR column
 * @method EntiteQuery groupBySigleAr() Group by the SIGLE_AR column
 * @method EntiteQuery groupByPathSigleFr() Group by the PATH_SIGLE_FR column
 * @method EntiteQuery groupByPathSigleAr() Group by the PATH_SIGLE_AR column
 * @method EntiteQuery groupByEntiteVisibleRequerant() Group by the ENTITE_VISIBLE_REQUERANT column
 * @method EntiteQuery groupByIdEntiteReception() Group by the ID_ENTITE_RECEPTION column
 * @method EntiteQuery groupByNiveau() Group by the NIVEAU column
 * @method EntiteQuery groupByCodeMin() Group by the CODE_MIN column
 * @method EntiteQuery groupByIdsEntiteEnCopie() Group by the IDS_ENTITE_EN_COPIE column
 * @method EntiteQuery groupByNomDomaine() Group by the NOM_DOMAINE column
 * @method EntiteQuery groupByAcronyme() Group by the ACRONYME column
 * @method EntiteQuery groupBySupprime() Group by the SUPPRIME column
 * @method EntiteQuery groupByEntiteTraitement() Group by the ENTITE_TRAITEMENT column
 * @method EntiteQuery groupByEntitesAutorisees() Group by the ENTITES_AUTORISEES column
 * @method EntiteQuery groupByCalculEntitesAutorisees() Group by the CALCUL_ENTITES_AUTORISEES column
 * @method EntiteQuery groupByIdEntiteAffectationAutomatique() Group by the ID_ENTITE_AFFECTATION_AUTOMATIQUE column
 * @method EntiteQuery groupByIdEntiteRelance() Group by the ID_ENTITE_RELANCE column
 * @method EntiteQuery groupByCodeEntite() Group by the CODE_ENTITE column
 * @method EntiteQuery groupByTelephonesCentreAppel() Group by the TELEPHONES_CENTRE_APPEL column
 * @method EntiteQuery groupByHoraireCentreAppelAr() Group by the HORAIRE_CENTRE_APPEL_AR column
 * @method EntiteQuery groupByHoraireCentreAppelFr() Group by the HORAIRE_CENTRE_APPEL_FR column
 * @method EntiteQuery groupByDateModification() Group by the DATE_MODIFICATION column
 * @method EntiteQuery groupByIdEntiteRecours() Group by the ID_ENTITE_RECOURS column
 * @method EntiteQuery groupByIdentifiantEntiteReceptionWs() Group by the IDENTIFIANT_ENTITE_RECEPTION_WS column
 * @method EntiteQuery groupByIdSocle() Group by the ID_SOCLE column
 * @method EntiteQuery groupByIdExterne() Group by the ID_EXTERNE column
 * @method EntiteQuery groupByIncrement() Group by the INCREMENT column
 *
 * @method EntiteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EntiteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EntiteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Entite findOne(PropelPDO $con = null) Return the first Entite matching the query
 * @method Entite findOneOrCreate(PropelPDO $con = null) Return the first Entite matching the query, or a new Entite object populated from the query conditions when no match is found
 *
 * @method Entite findOneByDenominationFr(string $DENOMINATION_FR) Return the first Entite filtered by the DENOMINATION_FR column
 * @method Entite findOneByDenominationAr(string $DENOMINATION_AR) Return the first Entite filtered by the DENOMINATION_AR column
 * @method Entite findOneByEtat(string $ETAT) Return the first Entite filtered by the ETAT column
 * @method Entite findOneByTypeEntite(string $TYPE_ENTITE) Return the first Entite filtered by the TYPE_ENTITE column
 * @method Entite findOneByMail(string $mail) Return the first Entite filtered by the mail column
 * @method Entite findOneByTelephone(string $telephone) Return the first Entite filtered by the telephone column
 * @method Entite findOneByFax(string $fax) Return the first Entite filtered by the fax column
 * @method Entite findOneByAdresse(string $adresse) Return the first Entite filtered by the adresse column
 * @method Entite findOneByAdresse2(string $adresse2) Return the first Entite filtered by the adresse2 column
 * @method Entite findOneByCp(string $cp) Return the first Entite filtered by the cp column
 * @method Entite findOneByVille(string $ville) Return the first Entite filtered by the ville column
 * @method Entite findOneByPathFr(string $path_fr) Return the first Entite filtered by the path_fr column
 * @method Entite findOneByPathAr(string $path_ar) Return the first Entite filtered by the path_ar column
 * @method Entite findOneByIdRegion(int $ID_REGION) Return the first Entite filtered by the ID_REGION column
 * @method Entite findOneByIdProvince(int $ID_PROVINCE) Return the first Entite filtered by the ID_PROVINCE column
 * @method Entite findOneByIdCommune(int $ID_COMMUNE) Return the first Entite filtered by the ID_COMMUNE column
 * @method Entite findOneByCommune(string $COMMUNE) Return the first Entite filtered by the COMMUNE column
 * @method Entite findOneByIdPays(int $ID_PAYS) Return the first Entite filtered by the ID_PAYS column
 * @method Entite findOneBySigleFr(string $SIGLE_FR) Return the first Entite filtered by the SIGLE_FR column
 * @method Entite findOneBySigleAr(string $SIGLE_AR) Return the first Entite filtered by the SIGLE_AR column
 * @method Entite findOneByPathSigleFr(string $PATH_SIGLE_FR) Return the first Entite filtered by the PATH_SIGLE_FR column
 * @method Entite findOneByPathSigleAr(string $PATH_SIGLE_AR) Return the first Entite filtered by the PATH_SIGLE_AR column
 * @method Entite findOneByEntiteVisibleRequerant(string $ENTITE_VISIBLE_REQUERANT) Return the first Entite filtered by the ENTITE_VISIBLE_REQUERANT column
 * @method Entite findOneByIdEntiteReception(int $ID_ENTITE_RECEPTION) Return the first Entite filtered by the ID_ENTITE_RECEPTION column
 * @method Entite findOneByNiveau(string $NIVEAU) Return the first Entite filtered by the NIVEAU column
 * @method Entite findOneByCodeMin(string $CODE_MIN) Return the first Entite filtered by the CODE_MIN column
 * @method Entite findOneByIdsEntiteEnCopie(string $IDS_ENTITE_EN_COPIE) Return the first Entite filtered by the IDS_ENTITE_EN_COPIE column
 * @method Entite findOneByNomDomaine(string $NOM_DOMAINE) Return the first Entite filtered by the NOM_DOMAINE column
 * @method Entite findOneByAcronyme(string $ACRONYME) Return the first Entite filtered by the ACRONYME column
 * @method Entite findOneBySupprime(string $SUPPRIME) Return the first Entite filtered by the SUPPRIME column
 * @method Entite findOneByEntiteTraitement(string $ENTITE_TRAITEMENT) Return the first Entite filtered by the ENTITE_TRAITEMENT column
 * @method Entite findOneByEntitesAutorisees(string $ENTITES_AUTORISEES) Return the first Entite filtered by the ENTITES_AUTORISEES column
 * @method Entite findOneByCalculEntitesAutorisees(string $CALCUL_ENTITES_AUTORISEES) Return the first Entite filtered by the CALCUL_ENTITES_AUTORISEES column
 * @method Entite findOneByIdEntiteAffectationAutomatique(int $ID_ENTITE_AFFECTATION_AUTOMATIQUE) Return the first Entite filtered by the ID_ENTITE_AFFECTATION_AUTOMATIQUE column
 * @method Entite findOneByIdEntiteRelance(int $ID_ENTITE_RELANCE) Return the first Entite filtered by the ID_ENTITE_RELANCE column
 * @method Entite findOneByCodeEntite(string $CODE_ENTITE) Return the first Entite filtered by the CODE_ENTITE column
 * @method Entite findOneByTelephonesCentreAppel(string $TELEPHONES_CENTRE_APPEL) Return the first Entite filtered by the TELEPHONES_CENTRE_APPEL column
 * @method Entite findOneByHoraireCentreAppelAr(string $HORAIRE_CENTRE_APPEL_AR) Return the first Entite filtered by the HORAIRE_CENTRE_APPEL_AR column
 * @method Entite findOneByHoraireCentreAppelFr(string $HORAIRE_CENTRE_APPEL_FR) Return the first Entite filtered by the HORAIRE_CENTRE_APPEL_FR column
 * @method Entite findOneByDateModification(string $DATE_MODIFICATION) Return the first Entite filtered by the DATE_MODIFICATION column
 * @method Entite findOneByIdEntiteRecours(int $ID_ENTITE_RECOURS) Return the first Entite filtered by the ID_ENTITE_RECOURS column
 * @method Entite findOneByIdentifiantEntiteReceptionWs(int $IDENTIFIANT_ENTITE_RECEPTION_WS) Return the first Entite filtered by the IDENTIFIANT_ENTITE_RECEPTION_WS column
 * @method Entite findOneByIdSocle(int $ID_SOCLE) Return the first Entite filtered by the ID_SOCLE column
 * @method Entite findOneByIdExterne(int $ID_EXTERNE) Return the first Entite filtered by the ID_EXTERNE column
 * @method Entite findOneByIncrement(string $INCREMENT) Return the first Entite filtered by the INCREMENT column
 *
 * @method array findByIdEntite(int $ID_ENTITE) Return Entite objects filtered by the ID_ENTITE column
 * @method array findByDenominationFr(string $DENOMINATION_FR) Return Entite objects filtered by the DENOMINATION_FR column
 * @method array findByDenominationAr(string $DENOMINATION_AR) Return Entite objects filtered by the DENOMINATION_AR column
 * @method array findByEtat(string $ETAT) Return Entite objects filtered by the ETAT column
 * @method array findByTypeEntite(string $TYPE_ENTITE) Return Entite objects filtered by the TYPE_ENTITE column
 * @method array findByMail(string $mail) Return Entite objects filtered by the mail column
 * @method array findByTelephone(string $telephone) Return Entite objects filtered by the telephone column
 * @method array findByFax(string $fax) Return Entite objects filtered by the fax column
 * @method array findByAdresse(string $adresse) Return Entite objects filtered by the adresse column
 * @method array findByAdresse2(string $adresse2) Return Entite objects filtered by the adresse2 column
 * @method array findByCp(string $cp) Return Entite objects filtered by the cp column
 * @method array findByVille(string $ville) Return Entite objects filtered by the ville column
 * @method array findByPathFr(string $path_fr) Return Entite objects filtered by the path_fr column
 * @method array findByPathAr(string $path_ar) Return Entite objects filtered by the path_ar column
 * @method array findByIdRegion(int $ID_REGION) Return Entite objects filtered by the ID_REGION column
 * @method array findByIdProvince(int $ID_PROVINCE) Return Entite objects filtered by the ID_PROVINCE column
 * @method array findByIdCommune(int $ID_COMMUNE) Return Entite objects filtered by the ID_COMMUNE column
 * @method array findByCommune(string $COMMUNE) Return Entite objects filtered by the COMMUNE column
 * @method array findByIdPays(int $ID_PAYS) Return Entite objects filtered by the ID_PAYS column
 * @method array findBySigleFr(string $SIGLE_FR) Return Entite objects filtered by the SIGLE_FR column
 * @method array findBySigleAr(string $SIGLE_AR) Return Entite objects filtered by the SIGLE_AR column
 * @method array findByPathSigleFr(string $PATH_SIGLE_FR) Return Entite objects filtered by the PATH_SIGLE_FR column
 * @method array findByPathSigleAr(string $PATH_SIGLE_AR) Return Entite objects filtered by the PATH_SIGLE_AR column
 * @method array findByEntiteVisibleRequerant(string $ENTITE_VISIBLE_REQUERANT) Return Entite objects filtered by the ENTITE_VISIBLE_REQUERANT column
 * @method array findByIdEntiteReception(int $ID_ENTITE_RECEPTION) Return Entite objects filtered by the ID_ENTITE_RECEPTION column
 * @method array findByNiveau(string $NIVEAU) Return Entite objects filtered by the NIVEAU column
 * @method array findByCodeMin(string $CODE_MIN) Return Entite objects filtered by the CODE_MIN column
 * @method array findByIdsEntiteEnCopie(string $IDS_ENTITE_EN_COPIE) Return Entite objects filtered by the IDS_ENTITE_EN_COPIE column
 * @method array findByNomDomaine(string $NOM_DOMAINE) Return Entite objects filtered by the NOM_DOMAINE column
 * @method array findByAcronyme(string $ACRONYME) Return Entite objects filtered by the ACRONYME column
 * @method array findBySupprime(string $SUPPRIME) Return Entite objects filtered by the SUPPRIME column
 * @method array findByEntiteTraitement(string $ENTITE_TRAITEMENT) Return Entite objects filtered by the ENTITE_TRAITEMENT column
 * @method array findByEntitesAutorisees(string $ENTITES_AUTORISEES) Return Entite objects filtered by the ENTITES_AUTORISEES column
 * @method array findByCalculEntitesAutorisees(string $CALCUL_ENTITES_AUTORISEES) Return Entite objects filtered by the CALCUL_ENTITES_AUTORISEES column
 * @method array findByIdEntiteAffectationAutomatique(int $ID_ENTITE_AFFECTATION_AUTOMATIQUE) Return Entite objects filtered by the ID_ENTITE_AFFECTATION_AUTOMATIQUE column
 * @method array findByIdEntiteRelance(int $ID_ENTITE_RELANCE) Return Entite objects filtered by the ID_ENTITE_RELANCE column
 * @method array findByCodeEntite(string $CODE_ENTITE) Return Entite objects filtered by the CODE_ENTITE column
 * @method array findByTelephonesCentreAppel(string $TELEPHONES_CENTRE_APPEL) Return Entite objects filtered by the TELEPHONES_CENTRE_APPEL column
 * @method array findByHoraireCentreAppelAr(string $HORAIRE_CENTRE_APPEL_AR) Return Entite objects filtered by the HORAIRE_CENTRE_APPEL_AR column
 * @method array findByHoraireCentreAppelFr(string $HORAIRE_CENTRE_APPEL_FR) Return Entite objects filtered by the HORAIRE_CENTRE_APPEL_FR column
 * @method array findByDateModification(string $DATE_MODIFICATION) Return Entite objects filtered by the DATE_MODIFICATION column
 * @method array findByIdEntiteRecours(int $ID_ENTITE_RECOURS) Return Entite objects filtered by the ID_ENTITE_RECOURS column
 * @method array findByIdentifiantEntiteReceptionWs(int $IDENTIFIANT_ENTITE_RECEPTION_WS) Return Entite objects filtered by the IDENTIFIANT_ENTITE_RECEPTION_WS column
 * @method array findByIdSocle(int $ID_SOCLE) Return Entite objects filtered by the ID_SOCLE column
 * @method array findByIdExterne(int $ID_EXTERNE) Return Entite objects filtered by the ID_EXTERNE column
 * @method array findByIncrement(string $INCREMENT) Return Entite objects filtered by the INCREMENT column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseEntiteQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseEntiteQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'Entite', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EntiteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   EntiteQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EntiteQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EntiteQuery) {
            return $criteria;
        }
        $query = new EntiteQuery();
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
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query 
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Entite|Entite[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EntitePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EntitePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Entite A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdEntite($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Entite A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_ENTITE`, `DENOMINATION_FR`, `DENOMINATION_AR`, `ETAT`, `TYPE_ENTITE`, `mail`, `telephone`, `fax`, `adresse`, `adresse2`, `cp`, `ville`, `path_fr`, `path_ar`, `ID_REGION`, `ID_PROVINCE`, `ID_COMMUNE`, `COMMUNE`, `ID_PAYS`, `SIGLE_FR`, `SIGLE_AR`, `PATH_SIGLE_FR`, `PATH_SIGLE_AR`, `ENTITE_VISIBLE_REQUERANT`, `ID_ENTITE_RECEPTION`, `NIVEAU`, `CODE_MIN`, `IDS_ENTITE_EN_COPIE`, `NOM_DOMAINE`, `ACRONYME`, `SUPPRIME`, `ENTITE_TRAITEMENT`, `ENTITES_AUTORISEES`, `CALCUL_ENTITES_AUTORISEES`, `ID_ENTITE_AFFECTATION_AUTOMATIQUE`, `ID_ENTITE_RELANCE`, `CODE_ENTITE`, `TELEPHONES_CENTRE_APPEL`, `HORAIRE_CENTRE_APPEL_AR`, `HORAIRE_CENTRE_APPEL_FR`, `DATE_MODIFICATION`, `ID_ENTITE_RECOURS`, `IDENTIFIANT_ENTITE_RECEPTION_WS`, `ID_SOCLE`, `ID_EXTERNE`, `INCREMENT` FROM `entite` WHERE `ID_ENTITE` = :p0';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Entite();
            $obj->hydrate($row);
            EntitePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Entite|Entite[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Entite[]|mixed the list of results, formatted by the current formatter
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
     * @return EntiteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EntitePeer::ID_ENTITE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EntiteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EntitePeer::ID_ENTITE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID_ENTITE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntite(1234); // WHERE ID_ENTITE = 1234
     * $query->filterByIdEntite(array(12, 34)); // WHERE ID_ENTITE IN (12, 34)
     * $query->filterByIdEntite(array('min' => 12)); // WHERE ID_ENTITE >= 12
     * $query->filterByIdEntite(array('max' => 12)); // WHERE ID_ENTITE <= 12
     * </code>
     *
     * @param     mixed $idEntite The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntiteQuery The current query, for fluid interface
     */
    public function filterByIdEntite($idEntite = null, $comparison = null)
    {
        if (is_array($idEntite)) {
            $useMinMax = false;
            if (isset($idEntite['min'])) {
                $this->addUsingAlias(EntitePeer::ID_ENTITE, $idEntite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntite['max'])) {
                $this->addUsingAlias(EntitePeer::ID_ENTITE, $idEntite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EntitePeer::ID_ENTITE, $idEntite, $comparison);
    }

    /**
     * Filter the query on the DENOMINATION_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByDenominationFr('fooValue');   // WHERE DENOMINATION_FR = 'fooValue'
     * $query->filterByDenominationFr('%fooValue%'); // WHERE DENOMINATION_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denominationFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntiteQuery The current query, for fluid interface
     */
    public function filterByDenominationFr($denominationFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denominationFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $denominationFr)) {
                $denominationFr = str_replace('*', '%', $denominationFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EntitePeer::DENOMINATION_FR, $denominationFr, $comparison);
    }

    /**
     * Filter the query on the DENOMINATION_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByDenominationAr('fooValue');   // WHERE DENOMINATION_AR = 'fooValue'
     * $query->filterByDenominationAr('%fooValue%'); // WHERE DENOMINATION_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denominationAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntiteQuery The current query, for fluid interface
     */
    public function filterByDenominationAr($denominationAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denominationAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $denominationAr)) {
                $denominationAr = str_replace('*', '%', $denominationAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EntitePeer::DENOMINATION_AR, $denominationAr, $comparison);
    }

    /**
     * Filter the query on the ETAT column
     *
     * Example usage:
     * <code>
     * $query->filterByEtat('fooValue');   // WHERE ETAT = 'fooValue'
     * $query->filterByEtat('%fooValue%'); // WHERE ETAT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $etat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntiteQuery The current query, for fluid interface
     */
    public function filterByEtat($etat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($etat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $etat)) {
                $etat = str_replace('*', '%', $etat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EntitePeer::ETAT, $etat, $comparison);
    }

    /**
     * Filter the query on the TYPE_ENTITE column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeEntite('fooValue');   // WHERE TYPE_ENTITE = 'fooValue'
     * $query->filterByTypeEntite('%fooValue%'); // WHERE TYPE_ENTITE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeEntite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntiteQuery The current query, for fluid interface
     */
    public function filterByTypeEntite($typeEntite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeEntite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeEntite)) {
                $typeEntite = str_replace('*', '%', $typeEntite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EntitePeer::TYPE_ENTITE, $typeEntite, $comparison);
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
     * @return EntiteQuery The current query, for fluid interface
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

        return $this->addUsingAlias(EntitePeer::MAIL, $mail, $comparison);
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
     * @return EntiteQuery The current query, for fluid interface
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

        return $this->addUsingAlias(EntitePeer::TELEPHONE, $telephone, $comparison);
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
     * @return EntiteQuery The current query, for fluid interface
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

        return $this->addUsingAlias(EntitePeer::FAX, $fax, $comparison);
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
     * @return EntiteQuery The current query, for fluid interface
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

        return $this->addUsingAlias(EntitePeer::ADRESSE, $adresse, $comparison);
    }

    /**
     * Filter the query on the adresse2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresse2('fooValue');   // WHERE adresse2 = 'fooValue'
     * $query->filterByAdresse2('%fooValue%'); // WHERE adresse2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresse2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntiteQuery The current query, for fluid interface
     */
    public function filterByAdresse2($adresse2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresse2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresse2)) {
                $adresse2 = str_replace('*', '%', $adresse2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EntitePeer::ADRESSE2, $adresse2, $comparison);
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
     * @return EntiteQuery The current query, for fluid interface
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

        return $this->addUsingAlias(EntitePeer::CP, $cp, $comparison);
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
     * @return EntiteQuery The current query, for fluid interface
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

        return $this->addUsingAlias(EntitePeer::VILLE, $ville, $comparison);
    }

    /**
     * Filter the query on the path_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByPathFr('fooValue');   // WHERE path_fr = 'fooValue'
     * $query->filterByPathFr('%fooValue%'); // WHERE path_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pathFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntiteQuery The current query, for fluid interface
     */
    public function filterByPathFr($pathFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pathFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pathFr)) {
                $pathFr = str_replace('*', '%', $pathFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EntitePeer::PATH_FR, $pathFr, $comparison);
    }

    /**
     * Filter the query on the path_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByPathAr('fooValue');   // WHERE path_ar = 'fooValue'
     * $query->filterByPathAr('%fooValue%'); // WHERE path_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pathAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntiteQuery The current query, for fluid interface
     */
    public function filterByPathAr($pathAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pathAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pathAr)) {
                $pathAr = str_replace('*', '%', $pathAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EntitePeer::PATH_AR, $pathAr, $comparison);
    }

    /**
     * Filter the query on the ID_REGION column
     *
     * Example usage:
     * <code>
     * $query->filterByIdRegion(1234); // WHERE ID_REGION = 1234
     * $query->filterByIdRegion(array(12, 34)); // WHERE ID_REGION IN (12, 34)
     * $query->filterByIdRegion(array('min' => 12)); // WHERE ID_REGION >= 12
     * $query->filterByIdRegion(array('max' => 12)); // WHERE ID_REGION <= 12
     * </code>
     *
     * @param     mixed $idRegion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntiteQuery The current query, for fluid interface
     */
    public function filterByIdRegion($idRegion = null, $comparison = null)
    {
        if (is_array($idRegion)) {
            $useMinMax = false;
            if (isset($idRegion['min'])) {
                $this->addUsingAlias(EntitePeer::ID_REGION, $idRegion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idRegion['max'])) {
                $this->addUsingAlias(EntitePeer::ID_REGION, $idRegion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EntitePeer::ID_REGION, $idRegion, $comparison);
    }

    /**
     * Filter the query on the ID_PROVINCE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdProvince(1234); // WHERE ID_PROVINCE = 1234
     * $query->filterByIdProvince(array(12, 34)); // WHERE ID_PROVINCE IN (12, 34)
     * $query->filterByIdProvince(array('min' => 12)); // WHERE ID_PROVINCE >= 12
     * $query->filterByIdProvince(array('max' => 12)); // WHERE ID_PROVINCE <= 12
     * </code>
     *
     * @param     mixed $idProvince The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntiteQuery The current query, for fluid interface
     */
    public function filterByIdProvince($idProvince = null, $comparison = null)
    {
        if (is_array($idProvince)) {
            $useMinMax = false;
            if (isset($idProvince['min'])) {
                $this->addUsingAlias(EntitePeer::ID_PROVINCE, $idProvince['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idProvince['max'])) {
                $this->addUsingAlias(EntitePeer::ID_PROVINCE, $idProvince['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EntitePeer::ID_PROVINCE, $idProvince, $comparison);
    }

    /**
     * Filter the query on the ID_COMMUNE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCommune(1234); // WHERE ID_COMMUNE = 1234
     * $query->filterByIdCommune(array(12, 34)); // WHERE ID_COMMUNE IN (12, 34)
     * $query->filterByIdCommune(array('min' => 12)); // WHERE ID_COMMUNE >= 12
     * $query->filterByIdCommune(array('max' => 12)); // WHERE ID_COMMUNE <= 12
     * </code>
     *
     * @param     mixed $idCommune The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntiteQuery The current query, for fluid interface
     */
    public function filterByIdCommune($idCommune = null, $comparison = null)
    {
        if (is_array($idCommune)) {
            $useMinMax = false;
            if (isset($idCommune['min'])) {
                $this->addUsingAlias(EntitePeer::ID_COMMUNE, $idCommune['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCommune['max'])) {
                $this->addUsingAlias(EntitePeer::ID_COMMUNE, $idCommune['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EntitePeer::ID_COMMUNE, $idCommune, $comparison);
    }

    /**
     * Filter the query on the COMMUNE column
     *
     * Example usage:
     * <code>
     * $query->filterByCommune('fooValue');   // WHERE COMMUNE = 'fooValue'
     * $query->filterByCommune('%fooValue%'); // WHERE COMMUNE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commune The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntiteQuery The current query, for fluid interface
     */
    public function filterByCommune($commune = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commune)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commune)) {
                $commune = str_replace('*', '%', $commune);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EntitePeer::COMMUNE, $commune, $comparison);
    }

    /**
     * Filter the query on the ID_PAYS column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPays(1234); // WHERE ID_PAYS = 1234
     * $query->filterByIdPays(array(12, 34)); // WHERE ID_PAYS IN (12, 34)
     * $query->filterByIdPays(array('min' => 12)); // WHERE ID_PAYS >= 12
     * $query->filterByIdPays(array('max' => 12)); // WHERE ID_PAYS <= 12
     * </code>
     *
     * @param     mixed $idPays The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntiteQuery The current query, for fluid interface
     */
    public function filterByIdPays($idPays = null, $comparison = null)
    {
        if (is_array($idPays)) {
            $useMinMax = false;
            if (isset($idPays['min'])) {
                $this->addUsingAlias(EntitePeer::ID_PAYS, $idPays['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPays['max'])) {
                $this->addUsingAlias(EntitePeer::ID_PAYS, $idPays['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EntitePeer::ID_PAYS, $idPays, $comparison);
    }

    /**
     * Filter the query on the SIGLE_FR column
     *
     * Example usage:
     * <code>
     * $query->filterBySigleFr('fooValue');   // WHERE SIGLE_FR = 'fooValue'
     * $query->filterBySigleFr('%fooValue%'); // WHERE SIGLE_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sigleFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntiteQuery The current query, for fluid interface
     */
    public function filterBySigleFr($sigleFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sigleFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sigleFr)) {
                $sigleFr = str_replace('*', '%', $sigleFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EntitePeer::SIGLE_FR, $sigleFr, $comparison);
    }

    /**
     * Filter the query on the SIGLE_AR column
     *
     * Example usage:
     * <code>
     * $query->filterBySigleAr('fooValue');   // WHERE SIGLE_AR = 'fooValue'
     * $query->filterBySigleAr('%fooValue%'); // WHERE SIGLE_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sigleAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntiteQuery The current query, for fluid interface
     */
    public function filterBySigleAr($sigleAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sigleAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sigleAr)) {
                $sigleAr = str_replace('*', '%', $sigleAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EntitePeer::SIGLE_AR, $sigleAr, $comparison);
    }

    /**
     * Filter the query on the PATH_SIGLE_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByPathSigleFr('fooValue');   // WHERE PATH_SIGLE_FR = 'fooValue'
     * $query->filterByPathSigleFr('%fooValue%'); // WHERE PATH_SIGLE_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pathSigleFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntiteQuery The current query, for fluid interface
     */
    public function filterByPathSigleFr($pathSigleFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pathSigleFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pathSigleFr)) {
                $pathSigleFr = str_replace('*', '%', $pathSigleFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EntitePeer::PATH_SIGLE_FR, $pathSigleFr, $comparison);
    }

    /**
     * Filter the query on the PATH_SIGLE_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByPathSigleAr('fooValue');   // WHERE PATH_SIGLE_AR = 'fooValue'
     * $query->filterByPathSigleAr('%fooValue%'); // WHERE PATH_SIGLE_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pathSigleAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntiteQuery The current query, for fluid interface
     */
    public function filterByPathSigleAr($pathSigleAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pathSigleAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pathSigleAr)) {
                $pathSigleAr = str_replace('*', '%', $pathSigleAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EntitePeer::PATH_SIGLE_AR, $pathSigleAr, $comparison);
    }

    /**
     * Filter the query on the ENTITE_VISIBLE_REQUERANT column
     *
     * Example usage:
     * <code>
     * $query->filterByEntiteVisibleRequerant('fooValue');   // WHERE ENTITE_VISIBLE_REQUERANT = 'fooValue'
     * $query->filterByEntiteVisibleRequerant('%fooValue%'); // WHERE ENTITE_VISIBLE_REQUERANT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $entiteVisibleRequerant The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntiteQuery The current query, for fluid interface
     */
    public function filterByEntiteVisibleRequerant($entiteVisibleRequerant = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($entiteVisibleRequerant)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $entiteVisibleRequerant)) {
                $entiteVisibleRequerant = str_replace('*', '%', $entiteVisibleRequerant);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EntitePeer::ENTITE_VISIBLE_REQUERANT, $entiteVisibleRequerant, $comparison);
    }

    /**
     * Filter the query on the ID_ENTITE_RECEPTION column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntiteReception(1234); // WHERE ID_ENTITE_RECEPTION = 1234
     * $query->filterByIdEntiteReception(array(12, 34)); // WHERE ID_ENTITE_RECEPTION IN (12, 34)
     * $query->filterByIdEntiteReception(array('min' => 12)); // WHERE ID_ENTITE_RECEPTION >= 12
     * $query->filterByIdEntiteReception(array('max' => 12)); // WHERE ID_ENTITE_RECEPTION <= 12
     * </code>
     *
     * @param     mixed $idEntiteReception The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntiteQuery The current query, for fluid interface
     */
    public function filterByIdEntiteReception($idEntiteReception = null, $comparison = null)
    {
        if (is_array($idEntiteReception)) {
            $useMinMax = false;
            if (isset($idEntiteReception['min'])) {
                $this->addUsingAlias(EntitePeer::ID_ENTITE_RECEPTION, $idEntiteReception['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntiteReception['max'])) {
                $this->addUsingAlias(EntitePeer::ID_ENTITE_RECEPTION, $idEntiteReception['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EntitePeer::ID_ENTITE_RECEPTION, $idEntiteReception, $comparison);
    }

    /**
     * Filter the query on the NIVEAU column
     *
     * Example usage:
     * <code>
     * $query->filterByNiveau('fooValue');   // WHERE NIVEAU = 'fooValue'
     * $query->filterByNiveau('%fooValue%'); // WHERE NIVEAU LIKE '%fooValue%'
     * </code>
     *
     * @param     string $niveau The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntiteQuery The current query, for fluid interface
     */
    public function filterByNiveau($niveau = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($niveau)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $niveau)) {
                $niveau = str_replace('*', '%', $niveau);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EntitePeer::NIVEAU, $niveau, $comparison);
    }

    /**
     * Filter the query on the CODE_MIN column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeMin('fooValue');   // WHERE CODE_MIN = 'fooValue'
     * $query->filterByCodeMin('%fooValue%'); // WHERE CODE_MIN LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codeMin The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntiteQuery The current query, for fluid interface
     */
    public function filterByCodeMin($codeMin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeMin)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codeMin)) {
                $codeMin = str_replace('*', '%', $codeMin);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EntitePeer::CODE_MIN, $codeMin, $comparison);
    }

    /**
     * Filter the query on the IDS_ENTITE_EN_COPIE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdsEntiteEnCopie('fooValue');   // WHERE IDS_ENTITE_EN_COPIE = 'fooValue'
     * $query->filterByIdsEntiteEnCopie('%fooValue%'); // WHERE IDS_ENTITE_EN_COPIE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idsEntiteEnCopie The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntiteQuery The current query, for fluid interface
     */
    public function filterByIdsEntiteEnCopie($idsEntiteEnCopie = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idsEntiteEnCopie)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idsEntiteEnCopie)) {
                $idsEntiteEnCopie = str_replace('*', '%', $idsEntiteEnCopie);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EntitePeer::IDS_ENTITE_EN_COPIE, $idsEntiteEnCopie, $comparison);
    }

    /**
     * Filter the query on the NOM_DOMAINE column
     *
     * Example usage:
     * <code>
     * $query->filterByNomDomaine('fooValue');   // WHERE NOM_DOMAINE = 'fooValue'
     * $query->filterByNomDomaine('%fooValue%'); // WHERE NOM_DOMAINE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomDomaine The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntiteQuery The current query, for fluid interface
     */
    public function filterByNomDomaine($nomDomaine = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomDomaine)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomDomaine)) {
                $nomDomaine = str_replace('*', '%', $nomDomaine);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EntitePeer::NOM_DOMAINE, $nomDomaine, $comparison);
    }

    /**
     * Filter the query on the ACRONYME column
     *
     * Example usage:
     * <code>
     * $query->filterByAcronyme('fooValue');   // WHERE ACRONYME = 'fooValue'
     * $query->filterByAcronyme('%fooValue%'); // WHERE ACRONYME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $acronyme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntiteQuery The current query, for fluid interface
     */
    public function filterByAcronyme($acronyme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($acronyme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $acronyme)) {
                $acronyme = str_replace('*', '%', $acronyme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EntitePeer::ACRONYME, $acronyme, $comparison);
    }

    /**
     * Filter the query on the SUPPRIME column
     *
     * Example usage:
     * <code>
     * $query->filterBySupprime('fooValue');   // WHERE SUPPRIME = 'fooValue'
     * $query->filterBySupprime('%fooValue%'); // WHERE SUPPRIME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $supprime The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntiteQuery The current query, for fluid interface
     */
    public function filterBySupprime($supprime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($supprime)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $supprime)) {
                $supprime = str_replace('*', '%', $supprime);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EntitePeer::SUPPRIME, $supprime, $comparison);
    }

    /**
     * Filter the query on the ENTITE_TRAITEMENT column
     *
     * Example usage:
     * <code>
     * $query->filterByEntiteTraitement('fooValue');   // WHERE ENTITE_TRAITEMENT = 'fooValue'
     * $query->filterByEntiteTraitement('%fooValue%'); // WHERE ENTITE_TRAITEMENT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $entiteTraitement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntiteQuery The current query, for fluid interface
     */
    public function filterByEntiteTraitement($entiteTraitement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($entiteTraitement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $entiteTraitement)) {
                $entiteTraitement = str_replace('*', '%', $entiteTraitement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EntitePeer::ENTITE_TRAITEMENT, $entiteTraitement, $comparison);
    }

    /**
     * Filter the query on the ENTITES_AUTORISEES column
     *
     * Example usage:
     * <code>
     * $query->filterByEntitesAutorisees('fooValue');   // WHERE ENTITES_AUTORISEES = 'fooValue'
     * $query->filterByEntitesAutorisees('%fooValue%'); // WHERE ENTITES_AUTORISEES LIKE '%fooValue%'
     * </code>
     *
     * @param     string $entitesAutorisees The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntiteQuery The current query, for fluid interface
     */
    public function filterByEntitesAutorisees($entitesAutorisees = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($entitesAutorisees)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $entitesAutorisees)) {
                $entitesAutorisees = str_replace('*', '%', $entitesAutorisees);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EntitePeer::ENTITES_AUTORISEES, $entitesAutorisees, $comparison);
    }

    /**
     * Filter the query on the CALCUL_ENTITES_AUTORISEES column
     *
     * Example usage:
     * <code>
     * $query->filterByCalculEntitesAutorisees('fooValue');   // WHERE CALCUL_ENTITES_AUTORISEES = 'fooValue'
     * $query->filterByCalculEntitesAutorisees('%fooValue%'); // WHERE CALCUL_ENTITES_AUTORISEES LIKE '%fooValue%'
     * </code>
     *
     * @param     string $calculEntitesAutorisees The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntiteQuery The current query, for fluid interface
     */
    public function filterByCalculEntitesAutorisees($calculEntitesAutorisees = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($calculEntitesAutorisees)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $calculEntitesAutorisees)) {
                $calculEntitesAutorisees = str_replace('*', '%', $calculEntitesAutorisees);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EntitePeer::CALCUL_ENTITES_AUTORISEES, $calculEntitesAutorisees, $comparison);
    }

    /**
     * Filter the query on the ID_ENTITE_AFFECTATION_AUTOMATIQUE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntiteAffectationAutomatique(1234); // WHERE ID_ENTITE_AFFECTATION_AUTOMATIQUE = 1234
     * $query->filterByIdEntiteAffectationAutomatique(array(12, 34)); // WHERE ID_ENTITE_AFFECTATION_AUTOMATIQUE IN (12, 34)
     * $query->filterByIdEntiteAffectationAutomatique(array('min' => 12)); // WHERE ID_ENTITE_AFFECTATION_AUTOMATIQUE >= 12
     * $query->filterByIdEntiteAffectationAutomatique(array('max' => 12)); // WHERE ID_ENTITE_AFFECTATION_AUTOMATIQUE <= 12
     * </code>
     *
     * @param     mixed $idEntiteAffectationAutomatique The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntiteQuery The current query, for fluid interface
     */
    public function filterByIdEntiteAffectationAutomatique($idEntiteAffectationAutomatique = null, $comparison = null)
    {
        if (is_array($idEntiteAffectationAutomatique)) {
            $useMinMax = false;
            if (isset($idEntiteAffectationAutomatique['min'])) {
                $this->addUsingAlias(EntitePeer::ID_ENTITE_AFFECTATION_AUTOMATIQUE, $idEntiteAffectationAutomatique['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntiteAffectationAutomatique['max'])) {
                $this->addUsingAlias(EntitePeer::ID_ENTITE_AFFECTATION_AUTOMATIQUE, $idEntiteAffectationAutomatique['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EntitePeer::ID_ENTITE_AFFECTATION_AUTOMATIQUE, $idEntiteAffectationAutomatique, $comparison);
    }

    /**
     * Filter the query on the ID_ENTITE_RELANCE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntiteRelance(1234); // WHERE ID_ENTITE_RELANCE = 1234
     * $query->filterByIdEntiteRelance(array(12, 34)); // WHERE ID_ENTITE_RELANCE IN (12, 34)
     * $query->filterByIdEntiteRelance(array('min' => 12)); // WHERE ID_ENTITE_RELANCE >= 12
     * $query->filterByIdEntiteRelance(array('max' => 12)); // WHERE ID_ENTITE_RELANCE <= 12
     * </code>
     *
     * @param     mixed $idEntiteRelance The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntiteQuery The current query, for fluid interface
     */
    public function filterByIdEntiteRelance($idEntiteRelance = null, $comparison = null)
    {
        if (is_array($idEntiteRelance)) {
            $useMinMax = false;
            if (isset($idEntiteRelance['min'])) {
                $this->addUsingAlias(EntitePeer::ID_ENTITE_RELANCE, $idEntiteRelance['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntiteRelance['max'])) {
                $this->addUsingAlias(EntitePeer::ID_ENTITE_RELANCE, $idEntiteRelance['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EntitePeer::ID_ENTITE_RELANCE, $idEntiteRelance, $comparison);
    }

    /**
     * Filter the query on the CODE_ENTITE column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeEntite('fooValue');   // WHERE CODE_ENTITE = 'fooValue'
     * $query->filterByCodeEntite('%fooValue%'); // WHERE CODE_ENTITE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codeEntite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntiteQuery The current query, for fluid interface
     */
    public function filterByCodeEntite($codeEntite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeEntite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codeEntite)) {
                $codeEntite = str_replace('*', '%', $codeEntite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EntitePeer::CODE_ENTITE, $codeEntite, $comparison);
    }

    /**
     * Filter the query on the TELEPHONES_CENTRE_APPEL column
     *
     * Example usage:
     * <code>
     * $query->filterByTelephonesCentreAppel('fooValue');   // WHERE TELEPHONES_CENTRE_APPEL = 'fooValue'
     * $query->filterByTelephonesCentreAppel('%fooValue%'); // WHERE TELEPHONES_CENTRE_APPEL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telephonesCentreAppel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntiteQuery The current query, for fluid interface
     */
    public function filterByTelephonesCentreAppel($telephonesCentreAppel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telephonesCentreAppel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telephonesCentreAppel)) {
                $telephonesCentreAppel = str_replace('*', '%', $telephonesCentreAppel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EntitePeer::TELEPHONES_CENTRE_APPEL, $telephonesCentreAppel, $comparison);
    }

    /**
     * Filter the query on the HORAIRE_CENTRE_APPEL_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByHoraireCentreAppelAr('fooValue');   // WHERE HORAIRE_CENTRE_APPEL_AR = 'fooValue'
     * $query->filterByHoraireCentreAppelAr('%fooValue%'); // WHERE HORAIRE_CENTRE_APPEL_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $horaireCentreAppelAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntiteQuery The current query, for fluid interface
     */
    public function filterByHoraireCentreAppelAr($horaireCentreAppelAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($horaireCentreAppelAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $horaireCentreAppelAr)) {
                $horaireCentreAppelAr = str_replace('*', '%', $horaireCentreAppelAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EntitePeer::HORAIRE_CENTRE_APPEL_AR, $horaireCentreAppelAr, $comparison);
    }

    /**
     * Filter the query on the HORAIRE_CENTRE_APPEL_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByHoraireCentreAppelFr('fooValue');   // WHERE HORAIRE_CENTRE_APPEL_FR = 'fooValue'
     * $query->filterByHoraireCentreAppelFr('%fooValue%'); // WHERE HORAIRE_CENTRE_APPEL_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $horaireCentreAppelFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntiteQuery The current query, for fluid interface
     */
    public function filterByHoraireCentreAppelFr($horaireCentreAppelFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($horaireCentreAppelFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $horaireCentreAppelFr)) {
                $horaireCentreAppelFr = str_replace('*', '%', $horaireCentreAppelFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EntitePeer::HORAIRE_CENTRE_APPEL_FR, $horaireCentreAppelFr, $comparison);
    }

    /**
     * Filter the query on the DATE_MODIFICATION column
     *
     * Example usage:
     * <code>
     * $query->filterByDateModification('2011-03-14'); // WHERE DATE_MODIFICATION = '2011-03-14'
     * $query->filterByDateModification('now'); // WHERE DATE_MODIFICATION = '2011-03-14'
     * $query->filterByDateModification(array('max' => 'yesterday')); // WHERE DATE_MODIFICATION > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateModification The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntiteQuery The current query, for fluid interface
     */
    public function filterByDateModification($dateModification = null, $comparison = null)
    {
        if (is_array($dateModification)) {
            $useMinMax = false;
            if (isset($dateModification['min'])) {
                $this->addUsingAlias(EntitePeer::DATE_MODIFICATION, $dateModification['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateModification['max'])) {
                $this->addUsingAlias(EntitePeer::DATE_MODIFICATION, $dateModification['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EntitePeer::DATE_MODIFICATION, $dateModification, $comparison);
    }

    /**
     * Filter the query on the ID_ENTITE_RECOURS column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntiteRecours(1234); // WHERE ID_ENTITE_RECOURS = 1234
     * $query->filterByIdEntiteRecours(array(12, 34)); // WHERE ID_ENTITE_RECOURS IN (12, 34)
     * $query->filterByIdEntiteRecours(array('min' => 12)); // WHERE ID_ENTITE_RECOURS >= 12
     * $query->filterByIdEntiteRecours(array('max' => 12)); // WHERE ID_ENTITE_RECOURS <= 12
     * </code>
     *
     * @param     mixed $idEntiteRecours The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntiteQuery The current query, for fluid interface
     */
    public function filterByIdEntiteRecours($idEntiteRecours = null, $comparison = null)
    {
        if (is_array($idEntiteRecours)) {
            $useMinMax = false;
            if (isset($idEntiteRecours['min'])) {
                $this->addUsingAlias(EntitePeer::ID_ENTITE_RECOURS, $idEntiteRecours['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntiteRecours['max'])) {
                $this->addUsingAlias(EntitePeer::ID_ENTITE_RECOURS, $idEntiteRecours['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EntitePeer::ID_ENTITE_RECOURS, $idEntiteRecours, $comparison);
    }

    /**
     * Filter the query on the IDENTIFIANT_ENTITE_RECEPTION_WS column
     *
     * Example usage:
     * <code>
     * $query->filterByIdentifiantEntiteReceptionWs(1234); // WHERE IDENTIFIANT_ENTITE_RECEPTION_WS = 1234
     * $query->filterByIdentifiantEntiteReceptionWs(array(12, 34)); // WHERE IDENTIFIANT_ENTITE_RECEPTION_WS IN (12, 34)
     * $query->filterByIdentifiantEntiteReceptionWs(array('min' => 12)); // WHERE IDENTIFIANT_ENTITE_RECEPTION_WS >= 12
     * $query->filterByIdentifiantEntiteReceptionWs(array('max' => 12)); // WHERE IDENTIFIANT_ENTITE_RECEPTION_WS <= 12
     * </code>
     *
     * @param     mixed $identifiantEntiteReceptionWs The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntiteQuery The current query, for fluid interface
     */
    public function filterByIdentifiantEntiteReceptionWs($identifiantEntiteReceptionWs = null, $comparison = null)
    {
        if (is_array($identifiantEntiteReceptionWs)) {
            $useMinMax = false;
            if (isset($identifiantEntiteReceptionWs['min'])) {
                $this->addUsingAlias(EntitePeer::IDENTIFIANT_ENTITE_RECEPTION_WS, $identifiantEntiteReceptionWs['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($identifiantEntiteReceptionWs['max'])) {
                $this->addUsingAlias(EntitePeer::IDENTIFIANT_ENTITE_RECEPTION_WS, $identifiantEntiteReceptionWs['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EntitePeer::IDENTIFIANT_ENTITE_RECEPTION_WS, $identifiantEntiteReceptionWs, $comparison);
    }

    /**
     * Filter the query on the ID_SOCLE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdSocle(1234); // WHERE ID_SOCLE = 1234
     * $query->filterByIdSocle(array(12, 34)); // WHERE ID_SOCLE IN (12, 34)
     * $query->filterByIdSocle(array('min' => 12)); // WHERE ID_SOCLE >= 12
     * $query->filterByIdSocle(array('max' => 12)); // WHERE ID_SOCLE <= 12
     * </code>
     *
     * @param     mixed $idSocle The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntiteQuery The current query, for fluid interface
     */
    public function filterByIdSocle($idSocle = null, $comparison = null)
    {
        if (is_array($idSocle)) {
            $useMinMax = false;
            if (isset($idSocle['min'])) {
                $this->addUsingAlias(EntitePeer::ID_SOCLE, $idSocle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idSocle['max'])) {
                $this->addUsingAlias(EntitePeer::ID_SOCLE, $idSocle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EntitePeer::ID_SOCLE, $idSocle, $comparison);
    }

    /**
     * Filter the query on the ID_EXTERNE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdExterne(1234); // WHERE ID_EXTERNE = 1234
     * $query->filterByIdExterne(array(12, 34)); // WHERE ID_EXTERNE IN (12, 34)
     * $query->filterByIdExterne(array('min' => 12)); // WHERE ID_EXTERNE >= 12
     * $query->filterByIdExterne(array('max' => 12)); // WHERE ID_EXTERNE <= 12
     * </code>
     *
     * @param     mixed $idExterne The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntiteQuery The current query, for fluid interface
     */
    public function filterByIdExterne($idExterne = null, $comparison = null)
    {
        if (is_array($idExterne)) {
            $useMinMax = false;
            if (isset($idExterne['min'])) {
                $this->addUsingAlias(EntitePeer::ID_EXTERNE, $idExterne['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idExterne['max'])) {
                $this->addUsingAlias(EntitePeer::ID_EXTERNE, $idExterne['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EntitePeer::ID_EXTERNE, $idExterne, $comparison);
    }

    /**
     * Filter the query on the INCREMENT column
     *
     * Example usage:
     * <code>
     * $query->filterByIncrement('fooValue');   // WHERE INCREMENT = 'fooValue'
     * $query->filterByIncrement('%fooValue%'); // WHERE INCREMENT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $increment The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EntiteQuery The current query, for fluid interface
     */
    public function filterByIncrement($increment = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($increment)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $increment)) {
                $increment = str_replace('*', '%', $increment);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EntitePeer::INCREMENT, $increment, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Entite $entite Object to remove from the list of results
     *
     * @return EntiteQuery The current query, for fluid interface
     */
    public function prune($entite = null)
    {
        if ($entite) {
            $this->addUsingAlias(EntitePeer::ID_ENTITE, $entite->getIdEntite(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
