<?php


/**
 * Base class that represents a query for the 'AnnonceBoamp' table.
 *
 * 
 *
 * @method CommonAnnonceBoampQuery orderByIdBoamp($order = Criteria::ASC) Order by the id_boamp column
 * @method CommonAnnonceBoampQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonAnnonceBoampQuery orderByConsultationRef($order = Criteria::ASC) Order by the consultation_ref column
 * @method CommonAnnonceBoampQuery orderByEnvoiBoamp($order = Criteria::ASC) Order by the envoi_boamp column
 * @method CommonAnnonceBoampQuery orderByDateEnvoi($order = Criteria::ASC) Order by the date_envoi column
 * @method CommonAnnonceBoampQuery orderByAnnXml($order = Criteria::ASC) Order by the ann_xml column
 * @method CommonAnnonceBoampQuery orderByAnnPdf($order = Criteria::ASC) Order by the ann_pdf column
 * @method CommonAnnonceBoampQuery orderByAnnFormValues($order = Criteria::ASC) Order by the ann_form_values column
 * @method CommonAnnonceBoampQuery orderByAnnError($order = Criteria::ASC) Order by the ann_error column
 * @method CommonAnnonceBoampQuery orderByTypeBoamp($order = Criteria::ASC) Order by the type_boamp column
 * @method CommonAnnonceBoampQuery orderByTypeAnn($order = Criteria::ASC) Order by the type_ann column
 * @method CommonAnnonceBoampQuery orderByDatepub($order = Criteria::ASC) Order by the datepub column
 * @method CommonAnnonceBoampQuery orderByNumAnn($order = Criteria::ASC) Order by the num_ann column
 * @method CommonAnnonceBoampQuery orderByParution($order = Criteria::ASC) Order by the parution column
 * @method CommonAnnonceBoampQuery orderByIdJo($order = Criteria::ASC) Order by the id_jo column
 * @method CommonAnnonceBoampQuery orderByErreurs($order = Criteria::ASC) Order by the erreurs column
 * @method CommonAnnonceBoampQuery orderByNomFichierXml($order = Criteria::ASC) Order by the nom_fichier_xml column
 * @method CommonAnnonceBoampQuery orderByEnvoiJoue($order = Criteria::ASC) Order by the envoi_joue column
 * @method CommonAnnonceBoampQuery orderByMapa($order = Criteria::ASC) Order by the mapa column
 * @method CommonAnnonceBoampQuery orderByImpliqueSad($order = Criteria::ASC) Order by the implique_SAD column
 * @method CommonAnnonceBoampQuery orderByDateMaj($order = Criteria::ASC) Order by the date_maj column
 * @method CommonAnnonceBoampQuery orderByIdDestinationFormXml($order = Criteria::ASC) Order by the id_destination_form_xml column
 * @method CommonAnnonceBoampQuery orderByIdFormXml($order = Criteria::ASC) Order by the id_form_xml column
 * @method CommonAnnonceBoampQuery orderByIdTypeXml($order = Criteria::ASC) Order by the id_type_xml column
 * @method CommonAnnonceBoampQuery orderByStatutDestinataire($order = Criteria::ASC) Order by the statut_destinataire column
 * @method CommonAnnonceBoampQuery orderByAccuseReception($order = Criteria::ASC) Order by the accuse_reception column
 * @method CommonAnnonceBoampQuery orderByLien($order = Criteria::ASC) Order by the lien column
 * @method CommonAnnonceBoampQuery orderByLienBoamp($order = Criteria::ASC) Order by the lien_boamp column
 * @method CommonAnnonceBoampQuery orderByLienPdf($order = Criteria::ASC) Order by the lien_pdf column
 *
 * @method CommonAnnonceBoampQuery groupByIdBoamp() Group by the id_boamp column
 * @method CommonAnnonceBoampQuery groupByOrganisme() Group by the organisme column
 * @method CommonAnnonceBoampQuery groupByConsultationRef() Group by the consultation_ref column
 * @method CommonAnnonceBoampQuery groupByEnvoiBoamp() Group by the envoi_boamp column
 * @method CommonAnnonceBoampQuery groupByDateEnvoi() Group by the date_envoi column
 * @method CommonAnnonceBoampQuery groupByAnnXml() Group by the ann_xml column
 * @method CommonAnnonceBoampQuery groupByAnnPdf() Group by the ann_pdf column
 * @method CommonAnnonceBoampQuery groupByAnnFormValues() Group by the ann_form_values column
 * @method CommonAnnonceBoampQuery groupByAnnError() Group by the ann_error column
 * @method CommonAnnonceBoampQuery groupByTypeBoamp() Group by the type_boamp column
 * @method CommonAnnonceBoampQuery groupByTypeAnn() Group by the type_ann column
 * @method CommonAnnonceBoampQuery groupByDatepub() Group by the datepub column
 * @method CommonAnnonceBoampQuery groupByNumAnn() Group by the num_ann column
 * @method CommonAnnonceBoampQuery groupByParution() Group by the parution column
 * @method CommonAnnonceBoampQuery groupByIdJo() Group by the id_jo column
 * @method CommonAnnonceBoampQuery groupByErreurs() Group by the erreurs column
 * @method CommonAnnonceBoampQuery groupByNomFichierXml() Group by the nom_fichier_xml column
 * @method CommonAnnonceBoampQuery groupByEnvoiJoue() Group by the envoi_joue column
 * @method CommonAnnonceBoampQuery groupByMapa() Group by the mapa column
 * @method CommonAnnonceBoampQuery groupByImpliqueSad() Group by the implique_SAD column
 * @method CommonAnnonceBoampQuery groupByDateMaj() Group by the date_maj column
 * @method CommonAnnonceBoampQuery groupByIdDestinationFormXml() Group by the id_destination_form_xml column
 * @method CommonAnnonceBoampQuery groupByIdFormXml() Group by the id_form_xml column
 * @method CommonAnnonceBoampQuery groupByIdTypeXml() Group by the id_type_xml column
 * @method CommonAnnonceBoampQuery groupByStatutDestinataire() Group by the statut_destinataire column
 * @method CommonAnnonceBoampQuery groupByAccuseReception() Group by the accuse_reception column
 * @method CommonAnnonceBoampQuery groupByLien() Group by the lien column
 * @method CommonAnnonceBoampQuery groupByLienBoamp() Group by the lien_boamp column
 * @method CommonAnnonceBoampQuery groupByLienPdf() Group by the lien_pdf column
 *
 * @method CommonAnnonceBoampQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonAnnonceBoampQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonAnnonceBoampQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonAnnonceBoampQuery leftJoinCommonConsultationRelatedByOrganismeConsultationRef($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonConsultationRelatedByOrganismeConsultationRef relation
 * @method CommonAnnonceBoampQuery rightJoinCommonConsultationRelatedByOrganismeConsultationRef($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonConsultationRelatedByOrganismeConsultationRef relation
 * @method CommonAnnonceBoampQuery innerJoinCommonConsultationRelatedByOrganismeConsultationRef($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonConsultationRelatedByOrganismeConsultationRef relation
 *
 * @method CommonAnnonceBoampQuery leftJoinCommonConsultationRelatedByConsultationRef($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonConsultationRelatedByConsultationRef relation
 * @method CommonAnnonceBoampQuery rightJoinCommonConsultationRelatedByConsultationRef($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonConsultationRelatedByConsultationRef relation
 * @method CommonAnnonceBoampQuery innerJoinCommonConsultationRelatedByConsultationRef($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonConsultationRelatedByConsultationRef relation
 *
 * @method CommonAnnonceBoamp findOne(PropelPDO $con = null) Return the first CommonAnnonceBoamp matching the query
 * @method CommonAnnonceBoamp findOneOrCreate(PropelPDO $con = null) Return the first CommonAnnonceBoamp matching the query, or a new CommonAnnonceBoamp object populated from the query conditions when no match is found
 *
 * @method CommonAnnonceBoamp findOneByIdBoamp(int $id_boamp) Return the first CommonAnnonceBoamp filtered by the id_boamp column
 * @method CommonAnnonceBoamp findOneByOrganisme(string $organisme) Return the first CommonAnnonceBoamp filtered by the organisme column
 * @method CommonAnnonceBoamp findOneByConsultationRef(int $consultation_ref) Return the first CommonAnnonceBoamp filtered by the consultation_ref column
 * @method CommonAnnonceBoamp findOneByEnvoiBoamp(int $envoi_boamp) Return the first CommonAnnonceBoamp filtered by the envoi_boamp column
 * @method CommonAnnonceBoamp findOneByDateEnvoi(string $date_envoi) Return the first CommonAnnonceBoamp filtered by the date_envoi column
 * @method CommonAnnonceBoamp findOneByAnnXml(resource $ann_xml) Return the first CommonAnnonceBoamp filtered by the ann_xml column
 * @method CommonAnnonceBoamp findOneByAnnPdf(resource $ann_pdf) Return the first CommonAnnonceBoamp filtered by the ann_pdf column
 * @method CommonAnnonceBoamp findOneByAnnFormValues(resource $ann_form_values) Return the first CommonAnnonceBoamp filtered by the ann_form_values column
 * @method CommonAnnonceBoamp findOneByAnnError(string $ann_error) Return the first CommonAnnonceBoamp filtered by the ann_error column
 * @method CommonAnnonceBoamp findOneByTypeBoamp(string $type_boamp) Return the first CommonAnnonceBoamp filtered by the type_boamp column
 * @method CommonAnnonceBoamp findOneByTypeAnn(int $type_ann) Return the first CommonAnnonceBoamp filtered by the type_ann column
 * @method CommonAnnonceBoamp findOneByDatepub(string $datepub) Return the first CommonAnnonceBoamp filtered by the datepub column
 * @method CommonAnnonceBoamp findOneByNumAnn(int $num_ann) Return the first CommonAnnonceBoamp filtered by the num_ann column
 * @method CommonAnnonceBoamp findOneByParution(string $parution) Return the first CommonAnnonceBoamp filtered by the parution column
 * @method CommonAnnonceBoamp findOneByIdJo(string $id_jo) Return the first CommonAnnonceBoamp filtered by the id_jo column
 * @method CommonAnnonceBoamp findOneByErreurs(string $erreurs) Return the first CommonAnnonceBoamp filtered by the erreurs column
 * @method CommonAnnonceBoamp findOneByNomFichierXml(string $nom_fichier_xml) Return the first CommonAnnonceBoamp filtered by the nom_fichier_xml column
 * @method CommonAnnonceBoamp findOneByEnvoiJoue(string $envoi_joue) Return the first CommonAnnonceBoamp filtered by the envoi_joue column
 * @method CommonAnnonceBoamp findOneByMapa(string $mapa) Return the first CommonAnnonceBoamp filtered by the mapa column
 * @method CommonAnnonceBoamp findOneByImpliqueSad(string $implique_SAD) Return the first CommonAnnonceBoamp filtered by the implique_SAD column
 * @method CommonAnnonceBoamp findOneByDateMaj(string $date_maj) Return the first CommonAnnonceBoamp filtered by the date_maj column
 * @method CommonAnnonceBoamp findOneByIdDestinationFormXml(int $id_destination_form_xml) Return the first CommonAnnonceBoamp filtered by the id_destination_form_xml column
 * @method CommonAnnonceBoamp findOneByIdFormXml(int $id_form_xml) Return the first CommonAnnonceBoamp filtered by the id_form_xml column
 * @method CommonAnnonceBoamp findOneByIdTypeXml(int $id_type_xml) Return the first CommonAnnonceBoamp filtered by the id_type_xml column
 * @method CommonAnnonceBoamp findOneByStatutDestinataire(string $statut_destinataire) Return the first CommonAnnonceBoamp filtered by the statut_destinataire column
 * @method CommonAnnonceBoamp findOneByAccuseReception(string $accuse_reception) Return the first CommonAnnonceBoamp filtered by the accuse_reception column
 * @method CommonAnnonceBoamp findOneByLien(string $lien) Return the first CommonAnnonceBoamp filtered by the lien column
 * @method CommonAnnonceBoamp findOneByLienBoamp(string $lien_boamp) Return the first CommonAnnonceBoamp filtered by the lien_boamp column
 * @method CommonAnnonceBoamp findOneByLienPdf(string $lien_pdf) Return the first CommonAnnonceBoamp filtered by the lien_pdf column
 *
 * @method array findByIdBoamp(int $id_boamp) Return CommonAnnonceBoamp objects filtered by the id_boamp column
 * @method array findByOrganisme(string $organisme) Return CommonAnnonceBoamp objects filtered by the organisme column
 * @method array findByConsultationRef(int $consultation_ref) Return CommonAnnonceBoamp objects filtered by the consultation_ref column
 * @method array findByEnvoiBoamp(int $envoi_boamp) Return CommonAnnonceBoamp objects filtered by the envoi_boamp column
 * @method array findByDateEnvoi(string $date_envoi) Return CommonAnnonceBoamp objects filtered by the date_envoi column
 * @method array findByAnnXml(resource $ann_xml) Return CommonAnnonceBoamp objects filtered by the ann_xml column
 * @method array findByAnnPdf(resource $ann_pdf) Return CommonAnnonceBoamp objects filtered by the ann_pdf column
 * @method array findByAnnFormValues(resource $ann_form_values) Return CommonAnnonceBoamp objects filtered by the ann_form_values column
 * @method array findByAnnError(string $ann_error) Return CommonAnnonceBoamp objects filtered by the ann_error column
 * @method array findByTypeBoamp(string $type_boamp) Return CommonAnnonceBoamp objects filtered by the type_boamp column
 * @method array findByTypeAnn(int $type_ann) Return CommonAnnonceBoamp objects filtered by the type_ann column
 * @method array findByDatepub(string $datepub) Return CommonAnnonceBoamp objects filtered by the datepub column
 * @method array findByNumAnn(int $num_ann) Return CommonAnnonceBoamp objects filtered by the num_ann column
 * @method array findByParution(string $parution) Return CommonAnnonceBoamp objects filtered by the parution column
 * @method array findByIdJo(string $id_jo) Return CommonAnnonceBoamp objects filtered by the id_jo column
 * @method array findByErreurs(string $erreurs) Return CommonAnnonceBoamp objects filtered by the erreurs column
 * @method array findByNomFichierXml(string $nom_fichier_xml) Return CommonAnnonceBoamp objects filtered by the nom_fichier_xml column
 * @method array findByEnvoiJoue(string $envoi_joue) Return CommonAnnonceBoamp objects filtered by the envoi_joue column
 * @method array findByMapa(string $mapa) Return CommonAnnonceBoamp objects filtered by the mapa column
 * @method array findByImpliqueSad(string $implique_SAD) Return CommonAnnonceBoamp objects filtered by the implique_SAD column
 * @method array findByDateMaj(string $date_maj) Return CommonAnnonceBoamp objects filtered by the date_maj column
 * @method array findByIdDestinationFormXml(int $id_destination_form_xml) Return CommonAnnonceBoamp objects filtered by the id_destination_form_xml column
 * @method array findByIdFormXml(int $id_form_xml) Return CommonAnnonceBoamp objects filtered by the id_form_xml column
 * @method array findByIdTypeXml(int $id_type_xml) Return CommonAnnonceBoamp objects filtered by the id_type_xml column
 * @method array findByStatutDestinataire(string $statut_destinataire) Return CommonAnnonceBoamp objects filtered by the statut_destinataire column
 * @method array findByAccuseReception(string $accuse_reception) Return CommonAnnonceBoamp objects filtered by the accuse_reception column
 * @method array findByLien(string $lien) Return CommonAnnonceBoamp objects filtered by the lien column
 * @method array findByLienBoamp(string $lien_boamp) Return CommonAnnonceBoamp objects filtered by the lien_boamp column
 * @method array findByLienPdf(string $lien_pdf) Return CommonAnnonceBoamp objects filtered by the lien_pdf column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonAnnonceBoampQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonAnnonceBoampQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonAnnonceBoamp', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonAnnonceBoampQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonAnnonceBoampQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonAnnonceBoampQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonAnnonceBoampQuery) {
            return $criteria;
        }
        $query = new CommonAnnonceBoampQuery();
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
                         A Primary key composition: [$id_boamp, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonAnnonceBoamp|CommonAnnonceBoamp[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonAnnonceBoampPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonAnnonceBoampPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonAnnonceBoamp A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_boamp`, `organisme`, `consultation_ref`, `envoi_boamp`, `date_envoi`, `ann_xml`, `ann_pdf`, `ann_form_values`, `ann_error`, `type_boamp`, `type_ann`, `datepub`, `num_ann`, `parution`, `id_jo`, `erreurs`, `nom_fichier_xml`, `envoi_joue`, `mapa`, `implique_SAD`, `date_maj`, `id_destination_form_xml`, `id_form_xml`, `id_type_xml`, `statut_destinataire`, `accuse_reception`, `lien`, `lien_boamp`, `lien_pdf` FROM `AnnonceBoamp` WHERE `id_boamp` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonAnnonceBoamp();
            $obj->hydrate($row);
            CommonAnnonceBoampPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonAnnonceBoamp|CommonAnnonceBoamp[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonAnnonceBoamp[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonAnnonceBoampQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonAnnonceBoampPeer::ID_BOAMP, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonAnnonceBoampPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonAnnonceBoampQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonAnnonceBoampPeer::ID_BOAMP, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonAnnonceBoampPeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the id_boamp column
     *
     * Example usage:
     * <code>
     * $query->filterByIdBoamp(1234); // WHERE id_boamp = 1234
     * $query->filterByIdBoamp(array(12, 34)); // WHERE id_boamp IN (12, 34)
     * $query->filterByIdBoamp(array('min' => 12)); // WHERE id_boamp >= 12
     * $query->filterByIdBoamp(array('max' => 12)); // WHERE id_boamp <= 12
     * </code>
     *
     * @param     mixed $idBoamp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnonceBoampQuery The current query, for fluid interface
     */
    public function filterByIdBoamp($idBoamp = null, $comparison = null)
    {
        if (is_array($idBoamp)) {
            $useMinMax = false;
            if (isset($idBoamp['min'])) {
                $this->addUsingAlias(CommonAnnonceBoampPeer::ID_BOAMP, $idBoamp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBoamp['max'])) {
                $this->addUsingAlias(CommonAnnonceBoampPeer::ID_BOAMP, $idBoamp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAnnonceBoampPeer::ID_BOAMP, $idBoamp, $comparison);
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
     * @return CommonAnnonceBoampQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonAnnonceBoampPeer::ORGANISME, $organisme, $comparison);
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
     * @see       filterByCommonConsultationRelatedByOrganismeConsultationRef()
     *
     * @see       filterByCommonConsultationRelatedByConsultationRef()
     *
     * @param     mixed $consultationRef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnonceBoampQuery The current query, for fluid interface
     */
    public function filterByConsultationRef($consultationRef = null, $comparison = null)
    {
        if (is_array($consultationRef)) {
            $useMinMax = false;
            if (isset($consultationRef['min'])) {
                $this->addUsingAlias(CommonAnnonceBoampPeer::CONSULTATION_REF, $consultationRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($consultationRef['max'])) {
                $this->addUsingAlias(CommonAnnonceBoampPeer::CONSULTATION_REF, $consultationRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAnnonceBoampPeer::CONSULTATION_REF, $consultationRef, $comparison);
    }

    /**
     * Filter the query on the envoi_boamp column
     *
     * Example usage:
     * <code>
     * $query->filterByEnvoiBoamp(1234); // WHERE envoi_boamp = 1234
     * $query->filterByEnvoiBoamp(array(12, 34)); // WHERE envoi_boamp IN (12, 34)
     * $query->filterByEnvoiBoamp(array('min' => 12)); // WHERE envoi_boamp >= 12
     * $query->filterByEnvoiBoamp(array('max' => 12)); // WHERE envoi_boamp <= 12
     * </code>
     *
     * @param     mixed $envoiBoamp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnonceBoampQuery The current query, for fluid interface
     */
    public function filterByEnvoiBoamp($envoiBoamp = null, $comparison = null)
    {
        if (is_array($envoiBoamp)) {
            $useMinMax = false;
            if (isset($envoiBoamp['min'])) {
                $this->addUsingAlias(CommonAnnonceBoampPeer::ENVOI_BOAMP, $envoiBoamp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($envoiBoamp['max'])) {
                $this->addUsingAlias(CommonAnnonceBoampPeer::ENVOI_BOAMP, $envoiBoamp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAnnonceBoampPeer::ENVOI_BOAMP, $envoiBoamp, $comparison);
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
     * @return CommonAnnonceBoampQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonAnnonceBoampPeer::DATE_ENVOI, $dateEnvoi, $comparison);
    }

    /**
     * Filter the query on the ann_xml column
     *
     * @param     mixed $annXml The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnonceBoampQuery The current query, for fluid interface
     */
    public function filterByAnnXml($annXml = null, $comparison = null)
    {

        return $this->addUsingAlias(CommonAnnonceBoampPeer::ANN_XML, $annXml, $comparison);
    }

    /**
     * Filter the query on the ann_pdf column
     *
     * @param     mixed $annPdf The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnonceBoampQuery The current query, for fluid interface
     */
    public function filterByAnnPdf($annPdf = null, $comparison = null)
    {

        return $this->addUsingAlias(CommonAnnonceBoampPeer::ANN_PDF, $annPdf, $comparison);
    }

    /**
     * Filter the query on the ann_form_values column
     *
     * @param     mixed $annFormValues The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnonceBoampQuery The current query, for fluid interface
     */
    public function filterByAnnFormValues($annFormValues = null, $comparison = null)
    {

        return $this->addUsingAlias(CommonAnnonceBoampPeer::ANN_FORM_VALUES, $annFormValues, $comparison);
    }

    /**
     * Filter the query on the ann_error column
     *
     * Example usage:
     * <code>
     * $query->filterByAnnError('fooValue');   // WHERE ann_error = 'fooValue'
     * $query->filterByAnnError('%fooValue%'); // WHERE ann_error LIKE '%fooValue%'
     * </code>
     *
     * @param     string $annError The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnonceBoampQuery The current query, for fluid interface
     */
    public function filterByAnnError($annError = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($annError)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $annError)) {
                $annError = str_replace('*', '%', $annError);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAnnonceBoampPeer::ANN_ERROR, $annError, $comparison);
    }

    /**
     * Filter the query on the type_boamp column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeBoamp('fooValue');   // WHERE type_boamp = 'fooValue'
     * $query->filterByTypeBoamp('%fooValue%'); // WHERE type_boamp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeBoamp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnonceBoampQuery The current query, for fluid interface
     */
    public function filterByTypeBoamp($typeBoamp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeBoamp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeBoamp)) {
                $typeBoamp = str_replace('*', '%', $typeBoamp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAnnonceBoampPeer::TYPE_BOAMP, $typeBoamp, $comparison);
    }

    /**
     * Filter the query on the type_ann column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeAnn(1234); // WHERE type_ann = 1234
     * $query->filterByTypeAnn(array(12, 34)); // WHERE type_ann IN (12, 34)
     * $query->filterByTypeAnn(array('min' => 12)); // WHERE type_ann >= 12
     * $query->filterByTypeAnn(array('max' => 12)); // WHERE type_ann <= 12
     * </code>
     *
     * @param     mixed $typeAnn The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnonceBoampQuery The current query, for fluid interface
     */
    public function filterByTypeAnn($typeAnn = null, $comparison = null)
    {
        if (is_array($typeAnn)) {
            $useMinMax = false;
            if (isset($typeAnn['min'])) {
                $this->addUsingAlias(CommonAnnonceBoampPeer::TYPE_ANN, $typeAnn['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeAnn['max'])) {
                $this->addUsingAlias(CommonAnnonceBoampPeer::TYPE_ANN, $typeAnn['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAnnonceBoampPeer::TYPE_ANN, $typeAnn, $comparison);
    }

    /**
     * Filter the query on the datepub column
     *
     * Example usage:
     * <code>
     * $query->filterByDatepub('fooValue');   // WHERE datepub = 'fooValue'
     * $query->filterByDatepub('%fooValue%'); // WHERE datepub LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datepub The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnonceBoampQuery The current query, for fluid interface
     */
    public function filterByDatepub($datepub = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datepub)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datepub)) {
                $datepub = str_replace('*', '%', $datepub);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAnnonceBoampPeer::DATEPUB, $datepub, $comparison);
    }

    /**
     * Filter the query on the num_ann column
     *
     * Example usage:
     * <code>
     * $query->filterByNumAnn(1234); // WHERE num_ann = 1234
     * $query->filterByNumAnn(array(12, 34)); // WHERE num_ann IN (12, 34)
     * $query->filterByNumAnn(array('min' => 12)); // WHERE num_ann >= 12
     * $query->filterByNumAnn(array('max' => 12)); // WHERE num_ann <= 12
     * </code>
     *
     * @param     mixed $numAnn The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnonceBoampQuery The current query, for fluid interface
     */
    public function filterByNumAnn($numAnn = null, $comparison = null)
    {
        if (is_array($numAnn)) {
            $useMinMax = false;
            if (isset($numAnn['min'])) {
                $this->addUsingAlias(CommonAnnonceBoampPeer::NUM_ANN, $numAnn['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numAnn['max'])) {
                $this->addUsingAlias(CommonAnnonceBoampPeer::NUM_ANN, $numAnn['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAnnonceBoampPeer::NUM_ANN, $numAnn, $comparison);
    }

    /**
     * Filter the query on the parution column
     *
     * Example usage:
     * <code>
     * $query->filterByParution('fooValue');   // WHERE parution = 'fooValue'
     * $query->filterByParution('%fooValue%'); // WHERE parution LIKE '%fooValue%'
     * </code>
     *
     * @param     string $parution The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnonceBoampQuery The current query, for fluid interface
     */
    public function filterByParution($parution = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($parution)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $parution)) {
                $parution = str_replace('*', '%', $parution);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAnnonceBoampPeer::PARUTION, $parution, $comparison);
    }

    /**
     * Filter the query on the id_jo column
     *
     * Example usage:
     * <code>
     * $query->filterByIdJo('fooValue');   // WHERE id_jo = 'fooValue'
     * $query->filterByIdJo('%fooValue%'); // WHERE id_jo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idJo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnonceBoampQuery The current query, for fluid interface
     */
    public function filterByIdJo($idJo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idJo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idJo)) {
                $idJo = str_replace('*', '%', $idJo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAnnonceBoampPeer::ID_JO, $idJo, $comparison);
    }

    /**
     * Filter the query on the erreurs column
     *
     * Example usage:
     * <code>
     * $query->filterByErreurs('fooValue');   // WHERE erreurs = 'fooValue'
     * $query->filterByErreurs('%fooValue%'); // WHERE erreurs LIKE '%fooValue%'
     * </code>
     *
     * @param     string $erreurs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnonceBoampQuery The current query, for fluid interface
     */
    public function filterByErreurs($erreurs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($erreurs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $erreurs)) {
                $erreurs = str_replace('*', '%', $erreurs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAnnonceBoampPeer::ERREURS, $erreurs, $comparison);
    }

    /**
     * Filter the query on the nom_fichier_xml column
     *
     * Example usage:
     * <code>
     * $query->filterByNomFichierXml('fooValue');   // WHERE nom_fichier_xml = 'fooValue'
     * $query->filterByNomFichierXml('%fooValue%'); // WHERE nom_fichier_xml LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomFichierXml The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnonceBoampQuery The current query, for fluid interface
     */
    public function filterByNomFichierXml($nomFichierXml = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomFichierXml)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomFichierXml)) {
                $nomFichierXml = str_replace('*', '%', $nomFichierXml);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAnnonceBoampPeer::NOM_FICHIER_XML, $nomFichierXml, $comparison);
    }

    /**
     * Filter the query on the envoi_joue column
     *
     * Example usage:
     * <code>
     * $query->filterByEnvoiJoue('fooValue');   // WHERE envoi_joue = 'fooValue'
     * $query->filterByEnvoiJoue('%fooValue%'); // WHERE envoi_joue LIKE '%fooValue%'
     * </code>
     *
     * @param     string $envoiJoue The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnonceBoampQuery The current query, for fluid interface
     */
    public function filterByEnvoiJoue($envoiJoue = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($envoiJoue)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $envoiJoue)) {
                $envoiJoue = str_replace('*', '%', $envoiJoue);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAnnonceBoampPeer::ENVOI_JOUE, $envoiJoue, $comparison);
    }

    /**
     * Filter the query on the mapa column
     *
     * Example usage:
     * <code>
     * $query->filterByMapa('fooValue');   // WHERE mapa = 'fooValue'
     * $query->filterByMapa('%fooValue%'); // WHERE mapa LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mapa The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnonceBoampQuery The current query, for fluid interface
     */
    public function filterByMapa($mapa = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mapa)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mapa)) {
                $mapa = str_replace('*', '%', $mapa);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAnnonceBoampPeer::MAPA, $mapa, $comparison);
    }

    /**
     * Filter the query on the implique_SAD column
     *
     * Example usage:
     * <code>
     * $query->filterByImpliqueSad('fooValue');   // WHERE implique_SAD = 'fooValue'
     * $query->filterByImpliqueSad('%fooValue%'); // WHERE implique_SAD LIKE '%fooValue%'
     * </code>
     *
     * @param     string $impliqueSad The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnonceBoampQuery The current query, for fluid interface
     */
    public function filterByImpliqueSad($impliqueSad = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($impliqueSad)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $impliqueSad)) {
                $impliqueSad = str_replace('*', '%', $impliqueSad);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAnnonceBoampPeer::IMPLIQUE_SAD, $impliqueSad, $comparison);
    }

    /**
     * Filter the query on the date_maj column
     *
     * Example usage:
     * <code>
     * $query->filterByDateMaj('2011-03-14'); // WHERE date_maj = '2011-03-14'
     * $query->filterByDateMaj('now'); // WHERE date_maj = '2011-03-14'
     * $query->filterByDateMaj(array('max' => 'yesterday')); // WHERE date_maj > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateMaj The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnonceBoampQuery The current query, for fluid interface
     */
    public function filterByDateMaj($dateMaj = null, $comparison = null)
    {
        if (is_array($dateMaj)) {
            $useMinMax = false;
            if (isset($dateMaj['min'])) {
                $this->addUsingAlias(CommonAnnonceBoampPeer::DATE_MAJ, $dateMaj['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateMaj['max'])) {
                $this->addUsingAlias(CommonAnnonceBoampPeer::DATE_MAJ, $dateMaj['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAnnonceBoampPeer::DATE_MAJ, $dateMaj, $comparison);
    }

    /**
     * Filter the query on the id_destination_form_xml column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDestinationFormXml(1234); // WHERE id_destination_form_xml = 1234
     * $query->filterByIdDestinationFormXml(array(12, 34)); // WHERE id_destination_form_xml IN (12, 34)
     * $query->filterByIdDestinationFormXml(array('min' => 12)); // WHERE id_destination_form_xml >= 12
     * $query->filterByIdDestinationFormXml(array('max' => 12)); // WHERE id_destination_form_xml <= 12
     * </code>
     *
     * @param     mixed $idDestinationFormXml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnonceBoampQuery The current query, for fluid interface
     */
    public function filterByIdDestinationFormXml($idDestinationFormXml = null, $comparison = null)
    {
        if (is_array($idDestinationFormXml)) {
            $useMinMax = false;
            if (isset($idDestinationFormXml['min'])) {
                $this->addUsingAlias(CommonAnnonceBoampPeer::ID_DESTINATION_FORM_XML, $idDestinationFormXml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDestinationFormXml['max'])) {
                $this->addUsingAlias(CommonAnnonceBoampPeer::ID_DESTINATION_FORM_XML, $idDestinationFormXml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAnnonceBoampPeer::ID_DESTINATION_FORM_XML, $idDestinationFormXml, $comparison);
    }

    /**
     * Filter the query on the id_form_xml column
     *
     * Example usage:
     * <code>
     * $query->filterByIdFormXml(1234); // WHERE id_form_xml = 1234
     * $query->filterByIdFormXml(array(12, 34)); // WHERE id_form_xml IN (12, 34)
     * $query->filterByIdFormXml(array('min' => 12)); // WHERE id_form_xml >= 12
     * $query->filterByIdFormXml(array('max' => 12)); // WHERE id_form_xml <= 12
     * </code>
     *
     * @param     mixed $idFormXml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnonceBoampQuery The current query, for fluid interface
     */
    public function filterByIdFormXml($idFormXml = null, $comparison = null)
    {
        if (is_array($idFormXml)) {
            $useMinMax = false;
            if (isset($idFormXml['min'])) {
                $this->addUsingAlias(CommonAnnonceBoampPeer::ID_FORM_XML, $idFormXml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idFormXml['max'])) {
                $this->addUsingAlias(CommonAnnonceBoampPeer::ID_FORM_XML, $idFormXml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAnnonceBoampPeer::ID_FORM_XML, $idFormXml, $comparison);
    }

    /**
     * Filter the query on the id_type_xml column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTypeXml(1234); // WHERE id_type_xml = 1234
     * $query->filterByIdTypeXml(array(12, 34)); // WHERE id_type_xml IN (12, 34)
     * $query->filterByIdTypeXml(array('min' => 12)); // WHERE id_type_xml >= 12
     * $query->filterByIdTypeXml(array('max' => 12)); // WHERE id_type_xml <= 12
     * </code>
     *
     * @param     mixed $idTypeXml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnonceBoampQuery The current query, for fluid interface
     */
    public function filterByIdTypeXml($idTypeXml = null, $comparison = null)
    {
        if (is_array($idTypeXml)) {
            $useMinMax = false;
            if (isset($idTypeXml['min'])) {
                $this->addUsingAlias(CommonAnnonceBoampPeer::ID_TYPE_XML, $idTypeXml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeXml['max'])) {
                $this->addUsingAlias(CommonAnnonceBoampPeer::ID_TYPE_XML, $idTypeXml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAnnonceBoampPeer::ID_TYPE_XML, $idTypeXml, $comparison);
    }

    /**
     * Filter the query on the statut_destinataire column
     *
     * Example usage:
     * <code>
     * $query->filterByStatutDestinataire('fooValue');   // WHERE statut_destinataire = 'fooValue'
     * $query->filterByStatutDestinataire('%fooValue%'); // WHERE statut_destinataire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $statutDestinataire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnonceBoampQuery The current query, for fluid interface
     */
    public function filterByStatutDestinataire($statutDestinataire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($statutDestinataire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $statutDestinataire)) {
                $statutDestinataire = str_replace('*', '%', $statutDestinataire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAnnonceBoampPeer::STATUT_DESTINATAIRE, $statutDestinataire, $comparison);
    }

    /**
     * Filter the query on the accuse_reception column
     *
     * Example usage:
     * <code>
     * $query->filterByAccuseReception('fooValue');   // WHERE accuse_reception = 'fooValue'
     * $query->filterByAccuseReception('%fooValue%'); // WHERE accuse_reception LIKE '%fooValue%'
     * </code>
     *
     * @param     string $accuseReception The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnonceBoampQuery The current query, for fluid interface
     */
    public function filterByAccuseReception($accuseReception = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($accuseReception)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $accuseReception)) {
                $accuseReception = str_replace('*', '%', $accuseReception);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAnnonceBoampPeer::ACCUSE_RECEPTION, $accuseReception, $comparison);
    }

    /**
     * Filter the query on the lien column
     *
     * Example usage:
     * <code>
     * $query->filterByLien('fooValue');   // WHERE lien = 'fooValue'
     * $query->filterByLien('%fooValue%'); // WHERE lien LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lien The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnonceBoampQuery The current query, for fluid interface
     */
    public function filterByLien($lien = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lien)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lien)) {
                $lien = str_replace('*', '%', $lien);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAnnonceBoampPeer::LIEN, $lien, $comparison);
    }

    /**
     * Filter the query on the lien_boamp column
     *
     * Example usage:
     * <code>
     * $query->filterByLienBoamp('fooValue');   // WHERE lien_boamp = 'fooValue'
     * $query->filterByLienBoamp('%fooValue%'); // WHERE lien_boamp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lienBoamp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnonceBoampQuery The current query, for fluid interface
     */
    public function filterByLienBoamp($lienBoamp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lienBoamp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lienBoamp)) {
                $lienBoamp = str_replace('*', '%', $lienBoamp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAnnonceBoampPeer::LIEN_BOAMP, $lienBoamp, $comparison);
    }

    /**
     * Filter the query on the lien_pdf column
     *
     * Example usage:
     * <code>
     * $query->filterByLienPdf('fooValue');   // WHERE lien_pdf = 'fooValue'
     * $query->filterByLienPdf('%fooValue%'); // WHERE lien_pdf LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lienPdf The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnonceBoampQuery The current query, for fluid interface
     */
    public function filterByLienPdf($lienPdf = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lienPdf)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lienPdf)) {
                $lienPdf = str_replace('*', '%', $lienPdf);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAnnonceBoampPeer::LIEN_PDF, $lienPdf, $comparison);
    }

    /**
     * Filter the query by a related CommonConsultation object
     *
     * @param   CommonConsultation $commonConsultation The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAnnonceBoampQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonConsultationRelatedByOrganismeConsultationRef($commonConsultation, $comparison = null)
    {
        if ($commonConsultation instanceof CommonConsultation) {
            return $this
                ->addUsingAlias(CommonAnnonceBoampPeer::ORGANISME, $commonConsultation->getOrganisme(), $comparison)
                ->addUsingAlias(CommonAnnonceBoampPeer::CONSULTATION_REF, $commonConsultation->getReference(), $comparison);
        } else {
            throw new PropelException('filterByCommonConsultationRelatedByOrganismeConsultationRef() only accepts arguments of type CommonConsultation');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonConsultationRelatedByOrganismeConsultationRef relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonAnnonceBoampQuery The current query, for fluid interface
     */
    public function joinCommonConsultationRelatedByOrganismeConsultationRef($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonConsultationRelatedByOrganismeConsultationRef');

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
            $this->addJoinObject($join, 'CommonConsultationRelatedByOrganismeConsultationRef');
        }

        return $this;
    }

    /**
     * Use the CommonConsultationRelatedByOrganismeConsultationRef relation CommonConsultation object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonConsultationQuery A secondary query class using the current class as primary query
     */
    public function useCommonConsultationRelatedByOrganismeConsultationRefQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonConsultationRelatedByOrganismeConsultationRef($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonConsultationRelatedByOrganismeConsultationRef', 'CommonConsultationQuery');
    }

    /**
     * Filter the query by a related CommonConsultation object
     *
     * @param   CommonConsultation|PropelObjectCollection $commonConsultation The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAnnonceBoampQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonConsultationRelatedByConsultationRef($commonConsultation, $comparison = null)
    {
        if ($commonConsultation instanceof CommonConsultation) {
            return $this
                ->addUsingAlias(CommonAnnonceBoampPeer::CONSULTATION_REF, $commonConsultation->getReference(), $comparison);
        } elseif ($commonConsultation instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonAnnonceBoampPeer::CONSULTATION_REF, $commonConsultation->toKeyValue('Reference', 'Reference'), $comparison);
        } else {
            throw new PropelException('filterByCommonConsultationRelatedByConsultationRef() only accepts arguments of type CommonConsultation or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonConsultationRelatedByConsultationRef relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonAnnonceBoampQuery The current query, for fluid interface
     */
    public function joinCommonConsultationRelatedByConsultationRef($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonConsultationRelatedByConsultationRef');

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
            $this->addJoinObject($join, 'CommonConsultationRelatedByConsultationRef');
        }

        return $this;
    }

    /**
     * Use the CommonConsultationRelatedByConsultationRef relation CommonConsultation object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonConsultationQuery A secondary query class using the current class as primary query
     */
    public function useCommonConsultationRelatedByConsultationRefQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonConsultationRelatedByConsultationRef($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonConsultationRelatedByConsultationRef', 'CommonConsultationQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonAnnonceBoamp $commonAnnonceBoamp Object to remove from the list of results
     *
     * @return CommonAnnonceBoampQuery The current query, for fluid interface
     */
    public function prune($commonAnnonceBoamp = null)
    {
        if ($commonAnnonceBoamp) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonAnnonceBoampPeer::ID_BOAMP), $commonAnnonceBoamp->getIdBoamp(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonAnnonceBoampPeer::ORGANISME), $commonAnnonceBoamp->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
