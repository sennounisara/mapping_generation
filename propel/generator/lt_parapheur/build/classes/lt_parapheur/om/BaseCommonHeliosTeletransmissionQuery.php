<?php


/**
 * Base class that represents a query for the 'Helios_teletransmission' table.
 *
 * 
 *
 * @method CommonHeliosTeletransmissionQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonHeliosTeletransmissionQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonHeliosTeletransmissionQuery orderByShownId($order = Criteria::ASC) Order by the shown_id column
 * @method CommonHeliosTeletransmissionQuery orderByIdAgentCreation($order = Criteria::ASC) Order by the id_agent_creation column
 * @method CommonHeliosTeletransmissionQuery orderByConsultationRef($order = Criteria::ASC) Order by the consultation_ref column
 * @method CommonHeliosTeletransmissionQuery orderByPubliciteCons($order = Criteria::ASC) Order by the publicite_cons column
 * @method CommonHeliosTeletransmissionQuery orderByDceItems($order = Criteria::ASC) Order by the dce_items column
 * @method CommonHeliosTeletransmissionQuery orderByIdsPvsCao($order = Criteria::ASC) Order by the ids_pvs_cao column
 * @method CommonHeliosTeletransmissionQuery orderByIdsRapportsPrefet($order = Criteria::ASC) Order by the ids_rapports_prefet column
 * @method CommonHeliosTeletransmissionQuery orderByDeliberationMapa($order = Criteria::ASC) Order by the deliberation_mapa column
 * @method CommonHeliosTeletransmissionQuery orderByTableauAr($order = Criteria::ASC) Order by the tableau_ar column
 * @method CommonHeliosTeletransmissionQuery orderByDateCreation($order = Criteria::ASC) Order by the date_creation column
 * @method CommonHeliosTeletransmissionQuery orderByDateEnvoi($order = Criteria::ASC) Order by the date_envoi column
 * @method CommonHeliosTeletransmissionQuery orderByIdAgentEnvoi($order = Criteria::ASC) Order by the id_agent_envoi column
 * @method CommonHeliosTeletransmissionQuery orderByNomPiecej1($order = Criteria::ASC) Order by the nom_piecej1 column
 * @method CommonHeliosTeletransmissionQuery orderByPiecej1($order = Criteria::ASC) Order by the piecej1 column
 * @method CommonHeliosTeletransmissionQuery orderByHorodatagePiecej1($order = Criteria::ASC) Order by the horodatage_piecej1 column
 * @method CommonHeliosTeletransmissionQuery orderByUntrusteddatePiecej1($order = Criteria::ASC) Order by the untrusteddate_piecej1 column
 * @method CommonHeliosTeletransmissionQuery orderByTaillePiecej1($order = Criteria::ASC) Order by the taille_piecej1 column
 * @method CommonHeliosTeletransmissionQuery orderByNomPiecej2($order = Criteria::ASC) Order by the nom_piecej2 column
 * @method CommonHeliosTeletransmissionQuery orderByPiecej2($order = Criteria::ASC) Order by the piecej2 column
 * @method CommonHeliosTeletransmissionQuery orderByHorodatagePiecej2($order = Criteria::ASC) Order by the horodatage_piecej2 column
 * @method CommonHeliosTeletransmissionQuery orderByUntrusteddatePiecej2($order = Criteria::ASC) Order by the untrusteddate_piecej2 column
 * @method CommonHeliosTeletransmissionQuery orderByTaillePiecej2($order = Criteria::ASC) Order by the taille_piecej2 column
 * @method CommonHeliosTeletransmissionQuery orderByPiecej1Desc($order = Criteria::ASC) Order by the piecej1_desc column
 * @method CommonHeliosTeletransmissionQuery orderByPiecej2Desc($order = Criteria::ASC) Order by the piecej2_desc column
 * @method CommonHeliosTeletransmissionQuery orderByFichierXml($order = Criteria::ASC) Order by the fichier_xml column
 * @method CommonHeliosTeletransmissionQuery orderByNomDossierzip($order = Criteria::ASC) Order by the nom_dossierzip column
 * @method CommonHeliosTeletransmissionQuery orderByTailleDossierzip($order = Criteria::ASC) Order by the taille_dossierzip column
 * @method CommonHeliosTeletransmissionQuery orderByObjetLibre($order = Criteria::ASC) Order by the objet_libre column
 * @method CommonHeliosTeletransmissionQuery orderByCommentaireLibre($order = Criteria::ASC) Order by the commentaire_libre column
 * @method CommonHeliosTeletransmissionQuery orderBySigPiecePrincipale($order = Criteria::ASC) Order by the sig_piece_principale column
 * @method CommonHeliosTeletransmissionQuery orderByRefUtilisateur($order = Criteria::ASC) Order by the ref_utilisateur column
 *
 * @method CommonHeliosTeletransmissionQuery groupById() Group by the id column
 * @method CommonHeliosTeletransmissionQuery groupByOrganisme() Group by the organisme column
 * @method CommonHeliosTeletransmissionQuery groupByShownId() Group by the shown_id column
 * @method CommonHeliosTeletransmissionQuery groupByIdAgentCreation() Group by the id_agent_creation column
 * @method CommonHeliosTeletransmissionQuery groupByConsultationRef() Group by the consultation_ref column
 * @method CommonHeliosTeletransmissionQuery groupByPubliciteCons() Group by the publicite_cons column
 * @method CommonHeliosTeletransmissionQuery groupByDceItems() Group by the dce_items column
 * @method CommonHeliosTeletransmissionQuery groupByIdsPvsCao() Group by the ids_pvs_cao column
 * @method CommonHeliosTeletransmissionQuery groupByIdsRapportsPrefet() Group by the ids_rapports_prefet column
 * @method CommonHeliosTeletransmissionQuery groupByDeliberationMapa() Group by the deliberation_mapa column
 * @method CommonHeliosTeletransmissionQuery groupByTableauAr() Group by the tableau_ar column
 * @method CommonHeliosTeletransmissionQuery groupByDateCreation() Group by the date_creation column
 * @method CommonHeliosTeletransmissionQuery groupByDateEnvoi() Group by the date_envoi column
 * @method CommonHeliosTeletransmissionQuery groupByIdAgentEnvoi() Group by the id_agent_envoi column
 * @method CommonHeliosTeletransmissionQuery groupByNomPiecej1() Group by the nom_piecej1 column
 * @method CommonHeliosTeletransmissionQuery groupByPiecej1() Group by the piecej1 column
 * @method CommonHeliosTeletransmissionQuery groupByHorodatagePiecej1() Group by the horodatage_piecej1 column
 * @method CommonHeliosTeletransmissionQuery groupByUntrusteddatePiecej1() Group by the untrusteddate_piecej1 column
 * @method CommonHeliosTeletransmissionQuery groupByTaillePiecej1() Group by the taille_piecej1 column
 * @method CommonHeliosTeletransmissionQuery groupByNomPiecej2() Group by the nom_piecej2 column
 * @method CommonHeliosTeletransmissionQuery groupByPiecej2() Group by the piecej2 column
 * @method CommonHeliosTeletransmissionQuery groupByHorodatagePiecej2() Group by the horodatage_piecej2 column
 * @method CommonHeliosTeletransmissionQuery groupByUntrusteddatePiecej2() Group by the untrusteddate_piecej2 column
 * @method CommonHeliosTeletransmissionQuery groupByTaillePiecej2() Group by the taille_piecej2 column
 * @method CommonHeliosTeletransmissionQuery groupByPiecej1Desc() Group by the piecej1_desc column
 * @method CommonHeliosTeletransmissionQuery groupByPiecej2Desc() Group by the piecej2_desc column
 * @method CommonHeliosTeletransmissionQuery groupByFichierXml() Group by the fichier_xml column
 * @method CommonHeliosTeletransmissionQuery groupByNomDossierzip() Group by the nom_dossierzip column
 * @method CommonHeliosTeletransmissionQuery groupByTailleDossierzip() Group by the taille_dossierzip column
 * @method CommonHeliosTeletransmissionQuery groupByObjetLibre() Group by the objet_libre column
 * @method CommonHeliosTeletransmissionQuery groupByCommentaireLibre() Group by the commentaire_libre column
 * @method CommonHeliosTeletransmissionQuery groupBySigPiecePrincipale() Group by the sig_piece_principale column
 * @method CommonHeliosTeletransmissionQuery groupByRefUtilisateur() Group by the ref_utilisateur column
 *
 * @method CommonHeliosTeletransmissionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonHeliosTeletransmissionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonHeliosTeletransmissionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonHeliosTeletransmissionQuery leftJoinCommonConsultation($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonConsultation relation
 * @method CommonHeliosTeletransmissionQuery rightJoinCommonConsultation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonConsultation relation
 * @method CommonHeliosTeletransmissionQuery innerJoinCommonConsultation($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonConsultation relation
 *
 * @method CommonHeliosTeletransmission findOne(PropelPDO $con = null) Return the first CommonHeliosTeletransmission matching the query
 * @method CommonHeliosTeletransmission findOneOrCreate(PropelPDO $con = null) Return the first CommonHeliosTeletransmission matching the query, or a new CommonHeliosTeletransmission object populated from the query conditions when no match is found
 *
 * @method CommonHeliosTeletransmission findOneById(int $id) Return the first CommonHeliosTeletransmission filtered by the id column
 * @method CommonHeliosTeletransmission findOneByOrganisme(string $organisme) Return the first CommonHeliosTeletransmission filtered by the organisme column
 * @method CommonHeliosTeletransmission findOneByShownId(string $shown_id) Return the first CommonHeliosTeletransmission filtered by the shown_id column
 * @method CommonHeliosTeletransmission findOneByIdAgentCreation(int $id_agent_creation) Return the first CommonHeliosTeletransmission filtered by the id_agent_creation column
 * @method CommonHeliosTeletransmission findOneByConsultationRef(int $consultation_ref) Return the first CommonHeliosTeletransmission filtered by the consultation_ref column
 * @method CommonHeliosTeletransmission findOneByPubliciteCons(string $publicite_cons) Return the first CommonHeliosTeletransmission filtered by the publicite_cons column
 * @method CommonHeliosTeletransmission findOneByDceItems(string $dce_items) Return the first CommonHeliosTeletransmission filtered by the dce_items column
 * @method CommonHeliosTeletransmission findOneByIdsPvsCao(string $ids_pvs_cao) Return the first CommonHeliosTeletransmission filtered by the ids_pvs_cao column
 * @method CommonHeliosTeletransmission findOneByIdsRapportsPrefet(string $ids_rapports_prefet) Return the first CommonHeliosTeletransmission filtered by the ids_rapports_prefet column
 * @method CommonHeliosTeletransmission findOneByDeliberationMapa(string $deliberation_mapa) Return the first CommonHeliosTeletransmission filtered by the deliberation_mapa column
 * @method CommonHeliosTeletransmission findOneByTableauAr(int $tableau_ar) Return the first CommonHeliosTeletransmission filtered by the tableau_ar column
 * @method CommonHeliosTeletransmission findOneByDateCreation(string $date_creation) Return the first CommonHeliosTeletransmission filtered by the date_creation column
 * @method CommonHeliosTeletransmission findOneByDateEnvoi(string $date_envoi) Return the first CommonHeliosTeletransmission filtered by the date_envoi column
 * @method CommonHeliosTeletransmission findOneByIdAgentEnvoi(int $id_agent_envoi) Return the first CommonHeliosTeletransmission filtered by the id_agent_envoi column
 * @method CommonHeliosTeletransmission findOneByNomPiecej1(string $nom_piecej1) Return the first CommonHeliosTeletransmission filtered by the nom_piecej1 column
 * @method CommonHeliosTeletransmission findOneByPiecej1(int $piecej1) Return the first CommonHeliosTeletransmission filtered by the piecej1 column
 * @method CommonHeliosTeletransmission findOneByHorodatagePiecej1(resource $horodatage_piecej1) Return the first CommonHeliosTeletransmission filtered by the horodatage_piecej1 column
 * @method CommonHeliosTeletransmission findOneByUntrusteddatePiecej1(string $untrusteddate_piecej1) Return the first CommonHeliosTeletransmission filtered by the untrusteddate_piecej1 column
 * @method CommonHeliosTeletransmission findOneByTaillePiecej1(string $taille_piecej1) Return the first CommonHeliosTeletransmission filtered by the taille_piecej1 column
 * @method CommonHeliosTeletransmission findOneByNomPiecej2(string $nom_piecej2) Return the first CommonHeliosTeletransmission filtered by the nom_piecej2 column
 * @method CommonHeliosTeletransmission findOneByPiecej2(int $piecej2) Return the first CommonHeliosTeletransmission filtered by the piecej2 column
 * @method CommonHeliosTeletransmission findOneByHorodatagePiecej2(resource $horodatage_piecej2) Return the first CommonHeliosTeletransmission filtered by the horodatage_piecej2 column
 * @method CommonHeliosTeletransmission findOneByUntrusteddatePiecej2(string $untrusteddate_piecej2) Return the first CommonHeliosTeletransmission filtered by the untrusteddate_piecej2 column
 * @method CommonHeliosTeletransmission findOneByTaillePiecej2(string $taille_piecej2) Return the first CommonHeliosTeletransmission filtered by the taille_piecej2 column
 * @method CommonHeliosTeletransmission findOneByPiecej1Desc(string $piecej1_desc) Return the first CommonHeliosTeletransmission filtered by the piecej1_desc column
 * @method CommonHeliosTeletransmission findOneByPiecej2Desc(string $piecej2_desc) Return the first CommonHeliosTeletransmission filtered by the piecej2_desc column
 * @method CommonHeliosTeletransmission findOneByFichierXml(resource $fichier_xml) Return the first CommonHeliosTeletransmission filtered by the fichier_xml column
 * @method CommonHeliosTeletransmission findOneByNomDossierzip(string $nom_dossierzip) Return the first CommonHeliosTeletransmission filtered by the nom_dossierzip column
 * @method CommonHeliosTeletransmission findOneByTailleDossierzip(string $taille_dossierzip) Return the first CommonHeliosTeletransmission filtered by the taille_dossierzip column
 * @method CommonHeliosTeletransmission findOneByObjetLibre(string $objet_libre) Return the first CommonHeliosTeletransmission filtered by the objet_libre column
 * @method CommonHeliosTeletransmission findOneByCommentaireLibre(string $commentaire_libre) Return the first CommonHeliosTeletransmission filtered by the commentaire_libre column
 * @method CommonHeliosTeletransmission findOneBySigPiecePrincipale(resource $sig_piece_principale) Return the first CommonHeliosTeletransmission filtered by the sig_piece_principale column
 * @method CommonHeliosTeletransmission findOneByRefUtilisateur(string $ref_utilisateur) Return the first CommonHeliosTeletransmission filtered by the ref_utilisateur column
 *
 * @method array findById(int $id) Return CommonHeliosTeletransmission objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonHeliosTeletransmission objects filtered by the organisme column
 * @method array findByShownId(string $shown_id) Return CommonHeliosTeletransmission objects filtered by the shown_id column
 * @method array findByIdAgentCreation(int $id_agent_creation) Return CommonHeliosTeletransmission objects filtered by the id_agent_creation column
 * @method array findByConsultationRef(int $consultation_ref) Return CommonHeliosTeletransmission objects filtered by the consultation_ref column
 * @method array findByPubliciteCons(string $publicite_cons) Return CommonHeliosTeletransmission objects filtered by the publicite_cons column
 * @method array findByDceItems(string $dce_items) Return CommonHeliosTeletransmission objects filtered by the dce_items column
 * @method array findByIdsPvsCao(string $ids_pvs_cao) Return CommonHeliosTeletransmission objects filtered by the ids_pvs_cao column
 * @method array findByIdsRapportsPrefet(string $ids_rapports_prefet) Return CommonHeliosTeletransmission objects filtered by the ids_rapports_prefet column
 * @method array findByDeliberationMapa(string $deliberation_mapa) Return CommonHeliosTeletransmission objects filtered by the deliberation_mapa column
 * @method array findByTableauAr(int $tableau_ar) Return CommonHeliosTeletransmission objects filtered by the tableau_ar column
 * @method array findByDateCreation(string $date_creation) Return CommonHeliosTeletransmission objects filtered by the date_creation column
 * @method array findByDateEnvoi(string $date_envoi) Return CommonHeliosTeletransmission objects filtered by the date_envoi column
 * @method array findByIdAgentEnvoi(int $id_agent_envoi) Return CommonHeliosTeletransmission objects filtered by the id_agent_envoi column
 * @method array findByNomPiecej1(string $nom_piecej1) Return CommonHeliosTeletransmission objects filtered by the nom_piecej1 column
 * @method array findByPiecej1(int $piecej1) Return CommonHeliosTeletransmission objects filtered by the piecej1 column
 * @method array findByHorodatagePiecej1(resource $horodatage_piecej1) Return CommonHeliosTeletransmission objects filtered by the horodatage_piecej1 column
 * @method array findByUntrusteddatePiecej1(string $untrusteddate_piecej1) Return CommonHeliosTeletransmission objects filtered by the untrusteddate_piecej1 column
 * @method array findByTaillePiecej1(string $taille_piecej1) Return CommonHeliosTeletransmission objects filtered by the taille_piecej1 column
 * @method array findByNomPiecej2(string $nom_piecej2) Return CommonHeliosTeletransmission objects filtered by the nom_piecej2 column
 * @method array findByPiecej2(int $piecej2) Return CommonHeliosTeletransmission objects filtered by the piecej2 column
 * @method array findByHorodatagePiecej2(resource $horodatage_piecej2) Return CommonHeliosTeletransmission objects filtered by the horodatage_piecej2 column
 * @method array findByUntrusteddatePiecej2(string $untrusteddate_piecej2) Return CommonHeliosTeletransmission objects filtered by the untrusteddate_piecej2 column
 * @method array findByTaillePiecej2(string $taille_piecej2) Return CommonHeliosTeletransmission objects filtered by the taille_piecej2 column
 * @method array findByPiecej1Desc(string $piecej1_desc) Return CommonHeliosTeletransmission objects filtered by the piecej1_desc column
 * @method array findByPiecej2Desc(string $piecej2_desc) Return CommonHeliosTeletransmission objects filtered by the piecej2_desc column
 * @method array findByFichierXml(resource $fichier_xml) Return CommonHeliosTeletransmission objects filtered by the fichier_xml column
 * @method array findByNomDossierzip(string $nom_dossierzip) Return CommonHeliosTeletransmission objects filtered by the nom_dossierzip column
 * @method array findByTailleDossierzip(string $taille_dossierzip) Return CommonHeliosTeletransmission objects filtered by the taille_dossierzip column
 * @method array findByObjetLibre(string $objet_libre) Return CommonHeliosTeletransmission objects filtered by the objet_libre column
 * @method array findByCommentaireLibre(string $commentaire_libre) Return CommonHeliosTeletransmission objects filtered by the commentaire_libre column
 * @method array findBySigPiecePrincipale(resource $sig_piece_principale) Return CommonHeliosTeletransmission objects filtered by the sig_piece_principale column
 * @method array findByRefUtilisateur(string $ref_utilisateur) Return CommonHeliosTeletransmission objects filtered by the ref_utilisateur column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonHeliosTeletransmissionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonHeliosTeletransmissionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonHeliosTeletransmission', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonHeliosTeletransmissionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonHeliosTeletransmissionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonHeliosTeletransmissionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonHeliosTeletransmissionQuery) {
            return $criteria;
        }
        $query = new CommonHeliosTeletransmissionQuery();
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
     * @return   CommonHeliosTeletransmission|CommonHeliosTeletransmission[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonHeliosTeletransmissionPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonHeliosTeletransmissionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonHeliosTeletransmission A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `shown_id`, `id_agent_creation`, `consultation_ref`, `publicite_cons`, `dce_items`, `ids_pvs_cao`, `ids_rapports_prefet`, `deliberation_mapa`, `tableau_ar`, `date_creation`, `date_envoi`, `id_agent_envoi`, `nom_piecej1`, `piecej1`, `horodatage_piecej1`, `untrusteddate_piecej1`, `taille_piecej1`, `nom_piecej2`, `piecej2`, `horodatage_piecej2`, `untrusteddate_piecej2`, `taille_piecej2`, `piecej1_desc`, `piecej2_desc`, `fichier_xml`, `nom_dossierzip`, `taille_dossierzip`, `objet_libre`, `commentaire_libre`, `sig_piece_principale`, `ref_utilisateur` FROM `Helios_teletransmission` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonHeliosTeletransmission();
            $obj->hydrate($row);
            CommonHeliosTeletransmissionPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonHeliosTeletransmission|CommonHeliosTeletransmission[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonHeliosTeletransmission[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonHeliosTeletransmissionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonHeliosTeletransmissionPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonHeliosTeletransmissionPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonHeliosTeletransmissionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonHeliosTeletransmissionPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonHeliosTeletransmissionPeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonHeliosTeletransmissionQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonHeliosTeletransmissionPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonHeliosTeletransmissionPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonHeliosTeletransmissionPeer::ID, $id, $comparison);
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
     * @return CommonHeliosTeletransmissionQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonHeliosTeletransmissionPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the shown_id column
     *
     * Example usage:
     * <code>
     * $query->filterByShownId('fooValue');   // WHERE shown_id = 'fooValue'
     * $query->filterByShownId('%fooValue%'); // WHERE shown_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shownId The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionQuery The current query, for fluid interface
     */
    public function filterByShownId($shownId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shownId)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $shownId)) {
                $shownId = str_replace('*', '%', $shownId);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHeliosTeletransmissionPeer::SHOWN_ID, $shownId, $comparison);
    }

    /**
     * Filter the query on the id_agent_creation column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentCreation(1234); // WHERE id_agent_creation = 1234
     * $query->filterByIdAgentCreation(array(12, 34)); // WHERE id_agent_creation IN (12, 34)
     * $query->filterByIdAgentCreation(array('min' => 12)); // WHERE id_agent_creation >= 12
     * $query->filterByIdAgentCreation(array('max' => 12)); // WHERE id_agent_creation <= 12
     * </code>
     *
     * @param     mixed $idAgentCreation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionQuery The current query, for fluid interface
     */
    public function filterByIdAgentCreation($idAgentCreation = null, $comparison = null)
    {
        if (is_array($idAgentCreation)) {
            $useMinMax = false;
            if (isset($idAgentCreation['min'])) {
                $this->addUsingAlias(CommonHeliosTeletransmissionPeer::ID_AGENT_CREATION, $idAgentCreation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentCreation['max'])) {
                $this->addUsingAlias(CommonHeliosTeletransmissionPeer::ID_AGENT_CREATION, $idAgentCreation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonHeliosTeletransmissionPeer::ID_AGENT_CREATION, $idAgentCreation, $comparison);
    }

    /**
     * Filter the query on the consultation_ref column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultationRef(1234); // WHERE consultation_ref = 1234
     * $query->filterByConsultationRef(array(12, 34)); // WHERE consultation_ref IN (12, 34)
     * $query->filterByConsultationRef(array('min' => 12)); // WHERE consultation_ref >= 12
     * $query->filterByConsultationRef(array('max' => 12)); // WHERE consultation_ref <= 12
     * </code>
     *
     * @see       filterByCommonConsultation()
     *
     * @param     mixed $consultationRef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionQuery The current query, for fluid interface
     */
    public function filterByConsultationRef($consultationRef = null, $comparison = null)
    {
        if (is_array($consultationRef)) {
            $useMinMax = false;
            if (isset($consultationRef['min'])) {
                $this->addUsingAlias(CommonHeliosTeletransmissionPeer::CONSULTATION_REF, $consultationRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($consultationRef['max'])) {
                $this->addUsingAlias(CommonHeliosTeletransmissionPeer::CONSULTATION_REF, $consultationRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonHeliosTeletransmissionPeer::CONSULTATION_REF, $consultationRef, $comparison);
    }

    /**
     * Filter the query on the publicite_cons column
     *
     * Example usage:
     * <code>
     * $query->filterByPubliciteCons('fooValue');   // WHERE publicite_cons = 'fooValue'
     * $query->filterByPubliciteCons('%fooValue%'); // WHERE publicite_cons LIKE '%fooValue%'
     * </code>
     *
     * @param     string $publiciteCons The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionQuery The current query, for fluid interface
     */
    public function filterByPubliciteCons($publiciteCons = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($publiciteCons)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $publiciteCons)) {
                $publiciteCons = str_replace('*', '%', $publiciteCons);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHeliosTeletransmissionPeer::PUBLICITE_CONS, $publiciteCons, $comparison);
    }

    /**
     * Filter the query on the dce_items column
     *
     * Example usage:
     * <code>
     * $query->filterByDceItems('fooValue');   // WHERE dce_items = 'fooValue'
     * $query->filterByDceItems('%fooValue%'); // WHERE dce_items LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dceItems The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionQuery The current query, for fluid interface
     */
    public function filterByDceItems($dceItems = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dceItems)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dceItems)) {
                $dceItems = str_replace('*', '%', $dceItems);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHeliosTeletransmissionPeer::DCE_ITEMS, $dceItems, $comparison);
    }

    /**
     * Filter the query on the ids_pvs_cao column
     *
     * Example usage:
     * <code>
     * $query->filterByIdsPvsCao('fooValue');   // WHERE ids_pvs_cao = 'fooValue'
     * $query->filterByIdsPvsCao('%fooValue%'); // WHERE ids_pvs_cao LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idsPvsCao The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionQuery The current query, for fluid interface
     */
    public function filterByIdsPvsCao($idsPvsCao = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idsPvsCao)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idsPvsCao)) {
                $idsPvsCao = str_replace('*', '%', $idsPvsCao);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHeliosTeletransmissionPeer::IDS_PVS_CAO, $idsPvsCao, $comparison);
    }

    /**
     * Filter the query on the ids_rapports_prefet column
     *
     * Example usage:
     * <code>
     * $query->filterByIdsRapportsPrefet('fooValue');   // WHERE ids_rapports_prefet = 'fooValue'
     * $query->filterByIdsRapportsPrefet('%fooValue%'); // WHERE ids_rapports_prefet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idsRapportsPrefet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionQuery The current query, for fluid interface
     */
    public function filterByIdsRapportsPrefet($idsRapportsPrefet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idsRapportsPrefet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idsRapportsPrefet)) {
                $idsRapportsPrefet = str_replace('*', '%', $idsRapportsPrefet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHeliosTeletransmissionPeer::IDS_RAPPORTS_PREFET, $idsRapportsPrefet, $comparison);
    }

    /**
     * Filter the query on the deliberation_mapa column
     *
     * Example usage:
     * <code>
     * $query->filterByDeliberationMapa('fooValue');   // WHERE deliberation_mapa = 'fooValue'
     * $query->filterByDeliberationMapa('%fooValue%'); // WHERE deliberation_mapa LIKE '%fooValue%'
     * </code>
     *
     * @param     string $deliberationMapa The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionQuery The current query, for fluid interface
     */
    public function filterByDeliberationMapa($deliberationMapa = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($deliberationMapa)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $deliberationMapa)) {
                $deliberationMapa = str_replace('*', '%', $deliberationMapa);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHeliosTeletransmissionPeer::DELIBERATION_MAPA, $deliberationMapa, $comparison);
    }

    /**
     * Filter the query on the tableau_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByTableauAr(1234); // WHERE tableau_ar = 1234
     * $query->filterByTableauAr(array(12, 34)); // WHERE tableau_ar IN (12, 34)
     * $query->filterByTableauAr(array('min' => 12)); // WHERE tableau_ar >= 12
     * $query->filterByTableauAr(array('max' => 12)); // WHERE tableau_ar <= 12
     * </code>
     *
     * @param     mixed $tableauAr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionQuery The current query, for fluid interface
     */
    public function filterByTableauAr($tableauAr = null, $comparison = null)
    {
        if (is_array($tableauAr)) {
            $useMinMax = false;
            if (isset($tableauAr['min'])) {
                $this->addUsingAlias(CommonHeliosTeletransmissionPeer::TABLEAU_AR, $tableauAr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tableauAr['max'])) {
                $this->addUsingAlias(CommonHeliosTeletransmissionPeer::TABLEAU_AR, $tableauAr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonHeliosTeletransmissionPeer::TABLEAU_AR, $tableauAr, $comparison);
    }

    /**
     * Filter the query on the date_creation column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCreation('fooValue');   // WHERE date_creation = 'fooValue'
     * $query->filterByDateCreation('%fooValue%'); // WHERE date_creation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateCreation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionQuery The current query, for fluid interface
     */
    public function filterByDateCreation($dateCreation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateCreation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateCreation)) {
                $dateCreation = str_replace('*', '%', $dateCreation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHeliosTeletransmissionPeer::DATE_CREATION, $dateCreation, $comparison);
    }

    /**
     * Filter the query on the date_envoi column
     *
     * Example usage:
     * <code>
     * $query->filterByDateEnvoi('fooValue');   // WHERE date_envoi = 'fooValue'
     * $query->filterByDateEnvoi('%fooValue%'); // WHERE date_envoi LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateEnvoi The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionQuery The current query, for fluid interface
     */
    public function filterByDateEnvoi($dateEnvoi = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateEnvoi)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateEnvoi)) {
                $dateEnvoi = str_replace('*', '%', $dateEnvoi);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHeliosTeletransmissionPeer::DATE_ENVOI, $dateEnvoi, $comparison);
    }

    /**
     * Filter the query on the id_agent_envoi column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentEnvoi(1234); // WHERE id_agent_envoi = 1234
     * $query->filterByIdAgentEnvoi(array(12, 34)); // WHERE id_agent_envoi IN (12, 34)
     * $query->filterByIdAgentEnvoi(array('min' => 12)); // WHERE id_agent_envoi >= 12
     * $query->filterByIdAgentEnvoi(array('max' => 12)); // WHERE id_agent_envoi <= 12
     * </code>
     *
     * @param     mixed $idAgentEnvoi The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionQuery The current query, for fluid interface
     */
    public function filterByIdAgentEnvoi($idAgentEnvoi = null, $comparison = null)
    {
        if (is_array($idAgentEnvoi)) {
            $useMinMax = false;
            if (isset($idAgentEnvoi['min'])) {
                $this->addUsingAlias(CommonHeliosTeletransmissionPeer::ID_AGENT_ENVOI, $idAgentEnvoi['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentEnvoi['max'])) {
                $this->addUsingAlias(CommonHeliosTeletransmissionPeer::ID_AGENT_ENVOI, $idAgentEnvoi['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonHeliosTeletransmissionPeer::ID_AGENT_ENVOI, $idAgentEnvoi, $comparison);
    }

    /**
     * Filter the query on the nom_piecej1 column
     *
     * Example usage:
     * <code>
     * $query->filterByNomPiecej1('fooValue');   // WHERE nom_piecej1 = 'fooValue'
     * $query->filterByNomPiecej1('%fooValue%'); // WHERE nom_piecej1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomPiecej1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionQuery The current query, for fluid interface
     */
    public function filterByNomPiecej1($nomPiecej1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomPiecej1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomPiecej1)) {
                $nomPiecej1 = str_replace('*', '%', $nomPiecej1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHeliosTeletransmissionPeer::NOM_PIECEJ1, $nomPiecej1, $comparison);
    }

    /**
     * Filter the query on the piecej1 column
     *
     * Example usage:
     * <code>
     * $query->filterByPiecej1(1234); // WHERE piecej1 = 1234
     * $query->filterByPiecej1(array(12, 34)); // WHERE piecej1 IN (12, 34)
     * $query->filterByPiecej1(array('min' => 12)); // WHERE piecej1 >= 12
     * $query->filterByPiecej1(array('max' => 12)); // WHERE piecej1 <= 12
     * </code>
     *
     * @param     mixed $piecej1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionQuery The current query, for fluid interface
     */
    public function filterByPiecej1($piecej1 = null, $comparison = null)
    {
        if (is_array($piecej1)) {
            $useMinMax = false;
            if (isset($piecej1['min'])) {
                $this->addUsingAlias(CommonHeliosTeletransmissionPeer::PIECEJ1, $piecej1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($piecej1['max'])) {
                $this->addUsingAlias(CommonHeliosTeletransmissionPeer::PIECEJ1, $piecej1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonHeliosTeletransmissionPeer::PIECEJ1, $piecej1, $comparison);
    }

    /**
     * Filter the query on the horodatage_piecej1 column
     *
     * @param     mixed $horodatagePiecej1 The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionQuery The current query, for fluid interface
     */
    public function filterByHorodatagePiecej1($horodatagePiecej1 = null, $comparison = null)
    {

        return $this->addUsingAlias(CommonHeliosTeletransmissionPeer::HORODATAGE_PIECEJ1, $horodatagePiecej1, $comparison);
    }

    /**
     * Filter the query on the untrusteddate_piecej1 column
     *
     * Example usage:
     * <code>
     * $query->filterByUntrusteddatePiecej1('fooValue');   // WHERE untrusteddate_piecej1 = 'fooValue'
     * $query->filterByUntrusteddatePiecej1('%fooValue%'); // WHERE untrusteddate_piecej1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $untrusteddatePiecej1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionQuery The current query, for fluid interface
     */
    public function filterByUntrusteddatePiecej1($untrusteddatePiecej1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($untrusteddatePiecej1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $untrusteddatePiecej1)) {
                $untrusteddatePiecej1 = str_replace('*', '%', $untrusteddatePiecej1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHeliosTeletransmissionPeer::UNTRUSTEDDATE_PIECEJ1, $untrusteddatePiecej1, $comparison);
    }

    /**
     * Filter the query on the taille_piecej1 column
     *
     * Example usage:
     * <code>
     * $query->filterByTaillePiecej1('fooValue');   // WHERE taille_piecej1 = 'fooValue'
     * $query->filterByTaillePiecej1('%fooValue%'); // WHERE taille_piecej1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $taillePiecej1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionQuery The current query, for fluid interface
     */
    public function filterByTaillePiecej1($taillePiecej1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($taillePiecej1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $taillePiecej1)) {
                $taillePiecej1 = str_replace('*', '%', $taillePiecej1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHeliosTeletransmissionPeer::TAILLE_PIECEJ1, $taillePiecej1, $comparison);
    }

    /**
     * Filter the query on the nom_piecej2 column
     *
     * Example usage:
     * <code>
     * $query->filterByNomPiecej2('fooValue');   // WHERE nom_piecej2 = 'fooValue'
     * $query->filterByNomPiecej2('%fooValue%'); // WHERE nom_piecej2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomPiecej2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionQuery The current query, for fluid interface
     */
    public function filterByNomPiecej2($nomPiecej2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomPiecej2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomPiecej2)) {
                $nomPiecej2 = str_replace('*', '%', $nomPiecej2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHeliosTeletransmissionPeer::NOM_PIECEJ2, $nomPiecej2, $comparison);
    }

    /**
     * Filter the query on the piecej2 column
     *
     * Example usage:
     * <code>
     * $query->filterByPiecej2(1234); // WHERE piecej2 = 1234
     * $query->filterByPiecej2(array(12, 34)); // WHERE piecej2 IN (12, 34)
     * $query->filterByPiecej2(array('min' => 12)); // WHERE piecej2 >= 12
     * $query->filterByPiecej2(array('max' => 12)); // WHERE piecej2 <= 12
     * </code>
     *
     * @param     mixed $piecej2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionQuery The current query, for fluid interface
     */
    public function filterByPiecej2($piecej2 = null, $comparison = null)
    {
        if (is_array($piecej2)) {
            $useMinMax = false;
            if (isset($piecej2['min'])) {
                $this->addUsingAlias(CommonHeliosTeletransmissionPeer::PIECEJ2, $piecej2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($piecej2['max'])) {
                $this->addUsingAlias(CommonHeliosTeletransmissionPeer::PIECEJ2, $piecej2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonHeliosTeletransmissionPeer::PIECEJ2, $piecej2, $comparison);
    }

    /**
     * Filter the query on the horodatage_piecej2 column
     *
     * @param     mixed $horodatagePiecej2 The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionQuery The current query, for fluid interface
     */
    public function filterByHorodatagePiecej2($horodatagePiecej2 = null, $comparison = null)
    {

        return $this->addUsingAlias(CommonHeliosTeletransmissionPeer::HORODATAGE_PIECEJ2, $horodatagePiecej2, $comparison);
    }

    /**
     * Filter the query on the untrusteddate_piecej2 column
     *
     * Example usage:
     * <code>
     * $query->filterByUntrusteddatePiecej2('fooValue');   // WHERE untrusteddate_piecej2 = 'fooValue'
     * $query->filterByUntrusteddatePiecej2('%fooValue%'); // WHERE untrusteddate_piecej2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $untrusteddatePiecej2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionQuery The current query, for fluid interface
     */
    public function filterByUntrusteddatePiecej2($untrusteddatePiecej2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($untrusteddatePiecej2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $untrusteddatePiecej2)) {
                $untrusteddatePiecej2 = str_replace('*', '%', $untrusteddatePiecej2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHeliosTeletransmissionPeer::UNTRUSTEDDATE_PIECEJ2, $untrusteddatePiecej2, $comparison);
    }

    /**
     * Filter the query on the taille_piecej2 column
     *
     * Example usage:
     * <code>
     * $query->filterByTaillePiecej2('fooValue');   // WHERE taille_piecej2 = 'fooValue'
     * $query->filterByTaillePiecej2('%fooValue%'); // WHERE taille_piecej2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $taillePiecej2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionQuery The current query, for fluid interface
     */
    public function filterByTaillePiecej2($taillePiecej2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($taillePiecej2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $taillePiecej2)) {
                $taillePiecej2 = str_replace('*', '%', $taillePiecej2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHeliosTeletransmissionPeer::TAILLE_PIECEJ2, $taillePiecej2, $comparison);
    }

    /**
     * Filter the query on the piecej1_desc column
     *
     * Example usage:
     * <code>
     * $query->filterByPiecej1Desc('fooValue');   // WHERE piecej1_desc = 'fooValue'
     * $query->filterByPiecej1Desc('%fooValue%'); // WHERE piecej1_desc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $piecej1Desc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionQuery The current query, for fluid interface
     */
    public function filterByPiecej1Desc($piecej1Desc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($piecej1Desc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $piecej1Desc)) {
                $piecej1Desc = str_replace('*', '%', $piecej1Desc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHeliosTeletransmissionPeer::PIECEJ1_DESC, $piecej1Desc, $comparison);
    }

    /**
     * Filter the query on the piecej2_desc column
     *
     * Example usage:
     * <code>
     * $query->filterByPiecej2Desc('fooValue');   // WHERE piecej2_desc = 'fooValue'
     * $query->filterByPiecej2Desc('%fooValue%'); // WHERE piecej2_desc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $piecej2Desc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionQuery The current query, for fluid interface
     */
    public function filterByPiecej2Desc($piecej2Desc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($piecej2Desc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $piecej2Desc)) {
                $piecej2Desc = str_replace('*', '%', $piecej2Desc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHeliosTeletransmissionPeer::PIECEJ2_DESC, $piecej2Desc, $comparison);
    }

    /**
     * Filter the query on the fichier_xml column
     *
     * @param     mixed $fichierXml The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionQuery The current query, for fluid interface
     */
    public function filterByFichierXml($fichierXml = null, $comparison = null)
    {

        return $this->addUsingAlias(CommonHeliosTeletransmissionPeer::FICHIER_XML, $fichierXml, $comparison);
    }

    /**
     * Filter the query on the nom_dossierzip column
     *
     * Example usage:
     * <code>
     * $query->filterByNomDossierzip('fooValue');   // WHERE nom_dossierzip = 'fooValue'
     * $query->filterByNomDossierzip('%fooValue%'); // WHERE nom_dossierzip LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomDossierzip The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionQuery The current query, for fluid interface
     */
    public function filterByNomDossierzip($nomDossierzip = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomDossierzip)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomDossierzip)) {
                $nomDossierzip = str_replace('*', '%', $nomDossierzip);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHeliosTeletransmissionPeer::NOM_DOSSIERZIP, $nomDossierzip, $comparison);
    }

    /**
     * Filter the query on the taille_dossierzip column
     *
     * Example usage:
     * <code>
     * $query->filterByTailleDossierzip('fooValue');   // WHERE taille_dossierzip = 'fooValue'
     * $query->filterByTailleDossierzip('%fooValue%'); // WHERE taille_dossierzip LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tailleDossierzip The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionQuery The current query, for fluid interface
     */
    public function filterByTailleDossierzip($tailleDossierzip = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tailleDossierzip)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tailleDossierzip)) {
                $tailleDossierzip = str_replace('*', '%', $tailleDossierzip);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHeliosTeletransmissionPeer::TAILLE_DOSSIERZIP, $tailleDossierzip, $comparison);
    }

    /**
     * Filter the query on the objet_libre column
     *
     * Example usage:
     * <code>
     * $query->filterByObjetLibre('fooValue');   // WHERE objet_libre = 'fooValue'
     * $query->filterByObjetLibre('%fooValue%'); // WHERE objet_libre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $objetLibre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionQuery The current query, for fluid interface
     */
    public function filterByObjetLibre($objetLibre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($objetLibre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $objetLibre)) {
                $objetLibre = str_replace('*', '%', $objetLibre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHeliosTeletransmissionPeer::OBJET_LIBRE, $objetLibre, $comparison);
    }

    /**
     * Filter the query on the commentaire_libre column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentaireLibre('fooValue');   // WHERE commentaire_libre = 'fooValue'
     * $query->filterByCommentaireLibre('%fooValue%'); // WHERE commentaire_libre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commentaireLibre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionQuery The current query, for fluid interface
     */
    public function filterByCommentaireLibre($commentaireLibre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commentaireLibre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commentaireLibre)) {
                $commentaireLibre = str_replace('*', '%', $commentaireLibre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHeliosTeletransmissionPeer::COMMENTAIRE_LIBRE, $commentaireLibre, $comparison);
    }

    /**
     * Filter the query on the sig_piece_principale column
     *
     * @param     mixed $sigPiecePrincipale The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionQuery The current query, for fluid interface
     */
    public function filterBySigPiecePrincipale($sigPiecePrincipale = null, $comparison = null)
    {

        return $this->addUsingAlias(CommonHeliosTeletransmissionPeer::SIG_PIECE_PRINCIPALE, $sigPiecePrincipale, $comparison);
    }

    /**
     * Filter the query on the ref_utilisateur column
     *
     * Example usage:
     * <code>
     * $query->filterByRefUtilisateur('fooValue');   // WHERE ref_utilisateur = 'fooValue'
     * $query->filterByRefUtilisateur('%fooValue%'); // WHERE ref_utilisateur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $refUtilisateur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosTeletransmissionQuery The current query, for fluid interface
     */
    public function filterByRefUtilisateur($refUtilisateur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($refUtilisateur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $refUtilisateur)) {
                $refUtilisateur = str_replace('*', '%', $refUtilisateur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHeliosTeletransmissionPeer::REF_UTILISATEUR, $refUtilisateur, $comparison);
    }

    /**
     * Filter the query by a related CommonConsultation object
     *
     * @param   CommonConsultation $commonConsultation The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonHeliosTeletransmissionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonConsultation($commonConsultation, $comparison = null)
    {
        if ($commonConsultation instanceof CommonConsultation) {
            return $this
                ->addUsingAlias(CommonHeliosTeletransmissionPeer::ORGANISME, $commonConsultation->getOrganisme(), $comparison)
                ->addUsingAlias(CommonHeliosTeletransmissionPeer::CONSULTATION_REF, $commonConsultation->getReference(), $comparison);
        } else {
            throw new PropelException('filterByCommonConsultation() only accepts arguments of type CommonConsultation');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonConsultation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonHeliosTeletransmissionQuery The current query, for fluid interface
     */
    public function joinCommonConsultation($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonConsultation');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonConsultation');
        }

        return $this;
    }

    /**
     * Use the CommonConsultation relation CommonConsultation object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonConsultationQuery A secondary query class using the current class as primary query
     */
    public function useCommonConsultationQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonConsultation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonConsultation', 'CommonConsultationQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonHeliosTeletransmission $commonHeliosTeletransmission Object to remove from the list of results
     *
     * @return CommonHeliosTeletransmissionQuery The current query, for fluid interface
     */
    public function prune($commonHeliosTeletransmission = null)
    {
        if ($commonHeliosTeletransmission) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonHeliosTeletransmissionPeer::ID), $commonHeliosTeletransmission->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonHeliosTeletransmissionPeer::ORGANISME), $commonHeliosTeletransmission->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
