<?php


/**
 * Base class that represents a query for the 'AnnonceMoniteur' table.
 *
 * 
 *
 * @method CommonAnnonceMoniteurQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonAnnonceMoniteurQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonAnnonceMoniteurQuery orderByDateEnvoi($order = Criteria::ASC) Order by the date_envoi column
 * @method CommonAnnonceMoniteurQuery orderByTypeMoniteur($order = Criteria::ASC) Order by the type_moniteur column
 * @method CommonAnnonceMoniteurQuery orderByStatutXml($order = Criteria::ASC) Order by the statut_xml column
 * @method CommonAnnonceMoniteurQuery orderByDateCreation($order = Criteria::ASC) Order by the date_creation column
 * @method CommonAnnonceMoniteurQuery orderByStatutWeb($order = Criteria::ASC) Order by the statut_web column
 * @method CommonAnnonceMoniteurQuery orderByStatutArg($order = Criteria::ASC) Order by the statut_arg column
 * @method CommonAnnonceMoniteurQuery orderByStatutUsn($order = Criteria::ASC) Order by the statut_usn column
 * @method CommonAnnonceMoniteurQuery orderByStatut01i($order = Criteria::ASC) Order by the statut_01i column
 * @method CommonAnnonceMoniteurQuery orderByDatepub($order = Criteria::ASC) Order by the datepub column
 * @method CommonAnnonceMoniteurQuery orderByNumAnnonce($order = Criteria::ASC) Order by the num_annonce column
 * @method CommonAnnonceMoniteurQuery orderByMessageError($order = Criteria::ASC) Order by the message_error column
 * @method CommonAnnonceMoniteurQuery orderByTimestamp($order = Criteria::ASC) Order by the timestamp column
 * @method CommonAnnonceMoniteurQuery orderByNomTimestamp($order = Criteria::ASC) Order by the nom_timestamp column
 * @method CommonAnnonceMoniteurQuery orderByXmlMoniteur($order = Criteria::ASC) Order by the xml_moniteur column
 * @method CommonAnnonceMoniteurQuery orderByIdAnnonceBoamp($order = Criteria::ASC) Order by the id_annonce_boamp column
 * @method CommonAnnonceMoniteurQuery orderByDateMaj($order = Criteria::ASC) Order by the date_maj column
 * @method CommonAnnonceMoniteurQuery orderByIdFormXml($order = Criteria::ASC) Order by the id_form_xml column
 * @method CommonAnnonceMoniteurQuery orderByAccuseReception($order = Criteria::ASC) Order by the accuse_reception column
 * @method CommonAnnonceMoniteurQuery orderByIdDestinationFormXml($order = Criteria::ASC) Order by the id_destination_form_xml column
 * @method CommonAnnonceMoniteurQuery orderByStatutDestinataire($order = Criteria::ASC) Order by the statut_destinataire column
 * @method CommonAnnonceMoniteurQuery orderByCommentaire($order = Criteria::ASC) Order by the commentaire column
 *
 * @method CommonAnnonceMoniteurQuery groupById() Group by the id column
 * @method CommonAnnonceMoniteurQuery groupByOrganisme() Group by the organisme column
 * @method CommonAnnonceMoniteurQuery groupByDateEnvoi() Group by the date_envoi column
 * @method CommonAnnonceMoniteurQuery groupByTypeMoniteur() Group by the type_moniteur column
 * @method CommonAnnonceMoniteurQuery groupByStatutXml() Group by the statut_xml column
 * @method CommonAnnonceMoniteurQuery groupByDateCreation() Group by the date_creation column
 * @method CommonAnnonceMoniteurQuery groupByStatutWeb() Group by the statut_web column
 * @method CommonAnnonceMoniteurQuery groupByStatutArg() Group by the statut_arg column
 * @method CommonAnnonceMoniteurQuery groupByStatutUsn() Group by the statut_usn column
 * @method CommonAnnonceMoniteurQuery groupByStatut01i() Group by the statut_01i column
 * @method CommonAnnonceMoniteurQuery groupByDatepub() Group by the datepub column
 * @method CommonAnnonceMoniteurQuery groupByNumAnnonce() Group by the num_annonce column
 * @method CommonAnnonceMoniteurQuery groupByMessageError() Group by the message_error column
 * @method CommonAnnonceMoniteurQuery groupByTimestamp() Group by the timestamp column
 * @method CommonAnnonceMoniteurQuery groupByNomTimestamp() Group by the nom_timestamp column
 * @method CommonAnnonceMoniteurQuery groupByXmlMoniteur() Group by the xml_moniteur column
 * @method CommonAnnonceMoniteurQuery groupByIdAnnonceBoamp() Group by the id_annonce_boamp column
 * @method CommonAnnonceMoniteurQuery groupByDateMaj() Group by the date_maj column
 * @method CommonAnnonceMoniteurQuery groupByIdFormXml() Group by the id_form_xml column
 * @method CommonAnnonceMoniteurQuery groupByAccuseReception() Group by the accuse_reception column
 * @method CommonAnnonceMoniteurQuery groupByIdDestinationFormXml() Group by the id_destination_form_xml column
 * @method CommonAnnonceMoniteurQuery groupByStatutDestinataire() Group by the statut_destinataire column
 * @method CommonAnnonceMoniteurQuery groupByCommentaire() Group by the commentaire column
 *
 * @method CommonAnnonceMoniteurQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonAnnonceMoniteurQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonAnnonceMoniteurQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonAnnonceMoniteur findOne(PropelPDO $con = null) Return the first CommonAnnonceMoniteur matching the query
 * @method CommonAnnonceMoniteur findOneOrCreate(PropelPDO $con = null) Return the first CommonAnnonceMoniteur matching the query, or a new CommonAnnonceMoniteur object populated from the query conditions when no match is found
 *
 * @method CommonAnnonceMoniteur findOneById(int $id) Return the first CommonAnnonceMoniteur filtered by the id column
 * @method CommonAnnonceMoniteur findOneByOrganisme(string $organisme) Return the first CommonAnnonceMoniteur filtered by the organisme column
 * @method CommonAnnonceMoniteur findOneByDateEnvoi(string $date_envoi) Return the first CommonAnnonceMoniteur filtered by the date_envoi column
 * @method CommonAnnonceMoniteur findOneByTypeMoniteur(string $type_moniteur) Return the first CommonAnnonceMoniteur filtered by the type_moniteur column
 * @method CommonAnnonceMoniteur findOneByStatutXml(string $statut_xml) Return the first CommonAnnonceMoniteur filtered by the statut_xml column
 * @method CommonAnnonceMoniteur findOneByDateCreation(string $date_creation) Return the first CommonAnnonceMoniteur filtered by the date_creation column
 * @method CommonAnnonceMoniteur findOneByStatutWeb(string $statut_web) Return the first CommonAnnonceMoniteur filtered by the statut_web column
 * @method CommonAnnonceMoniteur findOneByStatutArg(string $statut_arg) Return the first CommonAnnonceMoniteur filtered by the statut_arg column
 * @method CommonAnnonceMoniteur findOneByStatutUsn(string $statut_usn) Return the first CommonAnnonceMoniteur filtered by the statut_usn column
 * @method CommonAnnonceMoniteur findOneByStatut01i(string $statut_01i) Return the first CommonAnnonceMoniteur filtered by the statut_01i column
 * @method CommonAnnonceMoniteur findOneByDatepub(string $datepub) Return the first CommonAnnonceMoniteur filtered by the datepub column
 * @method CommonAnnonceMoniteur findOneByNumAnnonce(int $num_annonce) Return the first CommonAnnonceMoniteur filtered by the num_annonce column
 * @method CommonAnnonceMoniteur findOneByMessageError(string $message_error) Return the first CommonAnnonceMoniteur filtered by the message_error column
 * @method CommonAnnonceMoniteur findOneByTimestamp(resource $timestamp) Return the first CommonAnnonceMoniteur filtered by the timestamp column
 * @method CommonAnnonceMoniteur findOneByNomTimestamp(string $nom_timestamp) Return the first CommonAnnonceMoniteur filtered by the nom_timestamp column
 * @method CommonAnnonceMoniteur findOneByXmlMoniteur(string $xml_moniteur) Return the first CommonAnnonceMoniteur filtered by the xml_moniteur column
 * @method CommonAnnonceMoniteur findOneByIdAnnonceBoamp(int $id_annonce_boamp) Return the first CommonAnnonceMoniteur filtered by the id_annonce_boamp column
 * @method CommonAnnonceMoniteur findOneByDateMaj(string $date_maj) Return the first CommonAnnonceMoniteur filtered by the date_maj column
 * @method CommonAnnonceMoniteur findOneByIdFormXml(int $id_form_xml) Return the first CommonAnnonceMoniteur filtered by the id_form_xml column
 * @method CommonAnnonceMoniteur findOneByAccuseReception(string $accuse_reception) Return the first CommonAnnonceMoniteur filtered by the accuse_reception column
 * @method CommonAnnonceMoniteur findOneByIdDestinationFormXml(int $id_destination_form_xml) Return the first CommonAnnonceMoniteur filtered by the id_destination_form_xml column
 * @method CommonAnnonceMoniteur findOneByStatutDestinataire(string $statut_destinataire) Return the first CommonAnnonceMoniteur filtered by the statut_destinataire column
 * @method CommonAnnonceMoniteur findOneByCommentaire(string $commentaire) Return the first CommonAnnonceMoniteur filtered by the commentaire column
 *
 * @method array findById(int $id) Return CommonAnnonceMoniteur objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonAnnonceMoniteur objects filtered by the organisme column
 * @method array findByDateEnvoi(string $date_envoi) Return CommonAnnonceMoniteur objects filtered by the date_envoi column
 * @method array findByTypeMoniteur(string $type_moniteur) Return CommonAnnonceMoniteur objects filtered by the type_moniteur column
 * @method array findByStatutXml(string $statut_xml) Return CommonAnnonceMoniteur objects filtered by the statut_xml column
 * @method array findByDateCreation(string $date_creation) Return CommonAnnonceMoniteur objects filtered by the date_creation column
 * @method array findByStatutWeb(string $statut_web) Return CommonAnnonceMoniteur objects filtered by the statut_web column
 * @method array findByStatutArg(string $statut_arg) Return CommonAnnonceMoniteur objects filtered by the statut_arg column
 * @method array findByStatutUsn(string $statut_usn) Return CommonAnnonceMoniteur objects filtered by the statut_usn column
 * @method array findByStatut01i(string $statut_01i) Return CommonAnnonceMoniteur objects filtered by the statut_01i column
 * @method array findByDatepub(string $datepub) Return CommonAnnonceMoniteur objects filtered by the datepub column
 * @method array findByNumAnnonce(int $num_annonce) Return CommonAnnonceMoniteur objects filtered by the num_annonce column
 * @method array findByMessageError(string $message_error) Return CommonAnnonceMoniteur objects filtered by the message_error column
 * @method array findByTimestamp(resource $timestamp) Return CommonAnnonceMoniteur objects filtered by the timestamp column
 * @method array findByNomTimestamp(string $nom_timestamp) Return CommonAnnonceMoniteur objects filtered by the nom_timestamp column
 * @method array findByXmlMoniteur(string $xml_moniteur) Return CommonAnnonceMoniteur objects filtered by the xml_moniteur column
 * @method array findByIdAnnonceBoamp(int $id_annonce_boamp) Return CommonAnnonceMoniteur objects filtered by the id_annonce_boamp column
 * @method array findByDateMaj(string $date_maj) Return CommonAnnonceMoniteur objects filtered by the date_maj column
 * @method array findByIdFormXml(int $id_form_xml) Return CommonAnnonceMoniteur objects filtered by the id_form_xml column
 * @method array findByAccuseReception(string $accuse_reception) Return CommonAnnonceMoniteur objects filtered by the accuse_reception column
 * @method array findByIdDestinationFormXml(int $id_destination_form_xml) Return CommonAnnonceMoniteur objects filtered by the id_destination_form_xml column
 * @method array findByStatutDestinataire(string $statut_destinataire) Return CommonAnnonceMoniteur objects filtered by the statut_destinataire column
 * @method array findByCommentaire(string $commentaire) Return CommonAnnonceMoniteur objects filtered by the commentaire column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonAnnonceMoniteurQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonAnnonceMoniteurQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonAnnonceMoniteur', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonAnnonceMoniteurQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonAnnonceMoniteurQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonAnnonceMoniteurQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonAnnonceMoniteurQuery) {
            return $criteria;
        }
        $query = new CommonAnnonceMoniteurQuery();
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
     * @return   CommonAnnonceMoniteur|CommonAnnonceMoniteur[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonAnnonceMoniteurPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonAnnonceMoniteurPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonAnnonceMoniteur A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `date_envoi`, `type_moniteur`, `statut_xml`, `date_creation`, `statut_web`, `statut_arg`, `statut_usn`, `statut_01i`, `datepub`, `num_annonce`, `message_error`, `timestamp`, `nom_timestamp`, `xml_moniteur`, `id_annonce_boamp`, `date_maj`, `id_form_xml`, `accuse_reception`, `id_destination_form_xml`, `statut_destinataire`, `commentaire` FROM `AnnonceMoniteur` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonAnnonceMoniteur();
            $obj->hydrate($row);
            CommonAnnonceMoniteurPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonAnnonceMoniteur|CommonAnnonceMoniteur[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonAnnonceMoniteur[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonAnnonceMoniteurQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonAnnonceMoniteurPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonAnnonceMoniteurPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonAnnonceMoniteurQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonAnnonceMoniteurPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonAnnonceMoniteurPeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonAnnonceMoniteurQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonAnnonceMoniteurPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonAnnonceMoniteurPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAnnonceMoniteurPeer::ID, $id, $comparison);
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
     * @return CommonAnnonceMoniteurQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonAnnonceMoniteurPeer::ORGANISME, $organisme, $comparison);
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
     * @return CommonAnnonceMoniteurQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonAnnonceMoniteurPeer::DATE_ENVOI, $dateEnvoi, $comparison);
    }

    /**
     * Filter the query on the type_moniteur column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeMoniteur('fooValue');   // WHERE type_moniteur = 'fooValue'
     * $query->filterByTypeMoniteur('%fooValue%'); // WHERE type_moniteur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeMoniteur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnonceMoniteurQuery The current query, for fluid interface
     */
    public function filterByTypeMoniteur($typeMoniteur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeMoniteur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeMoniteur)) {
                $typeMoniteur = str_replace('*', '%', $typeMoniteur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAnnonceMoniteurPeer::TYPE_MONITEUR, $typeMoniteur, $comparison);
    }

    /**
     * Filter the query on the statut_xml column
     *
     * Example usage:
     * <code>
     * $query->filterByStatutXml('fooValue');   // WHERE statut_xml = 'fooValue'
     * $query->filterByStatutXml('%fooValue%'); // WHERE statut_xml LIKE '%fooValue%'
     * </code>
     *
     * @param     string $statutXml The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnonceMoniteurQuery The current query, for fluid interface
     */
    public function filterByStatutXml($statutXml = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($statutXml)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $statutXml)) {
                $statutXml = str_replace('*', '%', $statutXml);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAnnonceMoniteurPeer::STATUT_XML, $statutXml, $comparison);
    }

    /**
     * Filter the query on the date_creation column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCreation('2011-03-14'); // WHERE date_creation = '2011-03-14'
     * $query->filterByDateCreation('now'); // WHERE date_creation = '2011-03-14'
     * $query->filterByDateCreation(array('max' => 'yesterday')); // WHERE date_creation > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateCreation The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnonceMoniteurQuery The current query, for fluid interface
     */
    public function filterByDateCreation($dateCreation = null, $comparison = null)
    {
        if (is_array($dateCreation)) {
            $useMinMax = false;
            if (isset($dateCreation['min'])) {
                $this->addUsingAlias(CommonAnnonceMoniteurPeer::DATE_CREATION, $dateCreation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreation['max'])) {
                $this->addUsingAlias(CommonAnnonceMoniteurPeer::DATE_CREATION, $dateCreation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAnnonceMoniteurPeer::DATE_CREATION, $dateCreation, $comparison);
    }

    /**
     * Filter the query on the statut_web column
     *
     * Example usage:
     * <code>
     * $query->filterByStatutWeb('fooValue');   // WHERE statut_web = 'fooValue'
     * $query->filterByStatutWeb('%fooValue%'); // WHERE statut_web LIKE '%fooValue%'
     * </code>
     *
     * @param     string $statutWeb The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnonceMoniteurQuery The current query, for fluid interface
     */
    public function filterByStatutWeb($statutWeb = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($statutWeb)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $statutWeb)) {
                $statutWeb = str_replace('*', '%', $statutWeb);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAnnonceMoniteurPeer::STATUT_WEB, $statutWeb, $comparison);
    }

    /**
     * Filter the query on the statut_arg column
     *
     * Example usage:
     * <code>
     * $query->filterByStatutArg('fooValue');   // WHERE statut_arg = 'fooValue'
     * $query->filterByStatutArg('%fooValue%'); // WHERE statut_arg LIKE '%fooValue%'
     * </code>
     *
     * @param     string $statutArg The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnonceMoniteurQuery The current query, for fluid interface
     */
    public function filterByStatutArg($statutArg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($statutArg)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $statutArg)) {
                $statutArg = str_replace('*', '%', $statutArg);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAnnonceMoniteurPeer::STATUT_ARG, $statutArg, $comparison);
    }

    /**
     * Filter the query on the statut_usn column
     *
     * Example usage:
     * <code>
     * $query->filterByStatutUsn('fooValue');   // WHERE statut_usn = 'fooValue'
     * $query->filterByStatutUsn('%fooValue%'); // WHERE statut_usn LIKE '%fooValue%'
     * </code>
     *
     * @param     string $statutUsn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnonceMoniteurQuery The current query, for fluid interface
     */
    public function filterByStatutUsn($statutUsn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($statutUsn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $statutUsn)) {
                $statutUsn = str_replace('*', '%', $statutUsn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAnnonceMoniteurPeer::STATUT_USN, $statutUsn, $comparison);
    }

    /**
     * Filter the query on the statut_01i column
     *
     * Example usage:
     * <code>
     * $query->filterByStatut01i('fooValue');   // WHERE statut_01i = 'fooValue'
     * $query->filterByStatut01i('%fooValue%'); // WHERE statut_01i LIKE '%fooValue%'
     * </code>
     *
     * @param     string $statut01i The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnonceMoniteurQuery The current query, for fluid interface
     */
    public function filterByStatut01i($statut01i = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($statut01i)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $statut01i)) {
                $statut01i = str_replace('*', '%', $statut01i);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAnnonceMoniteurPeer::STATUT_01I, $statut01i, $comparison);
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
     * @return CommonAnnonceMoniteurQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonAnnonceMoniteurPeer::DATEPUB, $datepub, $comparison);
    }

    /**
     * Filter the query on the num_annonce column
     *
     * Example usage:
     * <code>
     * $query->filterByNumAnnonce(1234); // WHERE num_annonce = 1234
     * $query->filterByNumAnnonce(array(12, 34)); // WHERE num_annonce IN (12, 34)
     * $query->filterByNumAnnonce(array('min' => 12)); // WHERE num_annonce >= 12
     * $query->filterByNumAnnonce(array('max' => 12)); // WHERE num_annonce <= 12
     * </code>
     *
     * @param     mixed $numAnnonce The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnonceMoniteurQuery The current query, for fluid interface
     */
    public function filterByNumAnnonce($numAnnonce = null, $comparison = null)
    {
        if (is_array($numAnnonce)) {
            $useMinMax = false;
            if (isset($numAnnonce['min'])) {
                $this->addUsingAlias(CommonAnnonceMoniteurPeer::NUM_ANNONCE, $numAnnonce['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numAnnonce['max'])) {
                $this->addUsingAlias(CommonAnnonceMoniteurPeer::NUM_ANNONCE, $numAnnonce['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAnnonceMoniteurPeer::NUM_ANNONCE, $numAnnonce, $comparison);
    }

    /**
     * Filter the query on the message_error column
     *
     * Example usage:
     * <code>
     * $query->filterByMessageError('fooValue');   // WHERE message_error = 'fooValue'
     * $query->filterByMessageError('%fooValue%'); // WHERE message_error LIKE '%fooValue%'
     * </code>
     *
     * @param     string $messageError The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnonceMoniteurQuery The current query, for fluid interface
     */
    public function filterByMessageError($messageError = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($messageError)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $messageError)) {
                $messageError = str_replace('*', '%', $messageError);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAnnonceMoniteurPeer::MESSAGE_ERROR, $messageError, $comparison);
    }

    /**
     * Filter the query on the timestamp column
     *
     * @param     mixed $timestamp The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnonceMoniteurQuery The current query, for fluid interface
     */
    public function filterByTimestamp($timestamp = null, $comparison = null)
    {

        return $this->addUsingAlias(CommonAnnonceMoniteurPeer::TIMESTAMP, $timestamp, $comparison);
    }

    /**
     * Filter the query on the nom_timestamp column
     *
     * Example usage:
     * <code>
     * $query->filterByNomTimestamp('fooValue');   // WHERE nom_timestamp = 'fooValue'
     * $query->filterByNomTimestamp('%fooValue%'); // WHERE nom_timestamp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomTimestamp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnonceMoniteurQuery The current query, for fluid interface
     */
    public function filterByNomTimestamp($nomTimestamp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomTimestamp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomTimestamp)) {
                $nomTimestamp = str_replace('*', '%', $nomTimestamp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAnnonceMoniteurPeer::NOM_TIMESTAMP, $nomTimestamp, $comparison);
    }

    /**
     * Filter the query on the xml_moniteur column
     *
     * Example usage:
     * <code>
     * $query->filterByXmlMoniteur('fooValue');   // WHERE xml_moniteur = 'fooValue'
     * $query->filterByXmlMoniteur('%fooValue%'); // WHERE xml_moniteur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $xmlMoniteur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnonceMoniteurQuery The current query, for fluid interface
     */
    public function filterByXmlMoniteur($xmlMoniteur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($xmlMoniteur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $xmlMoniteur)) {
                $xmlMoniteur = str_replace('*', '%', $xmlMoniteur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAnnonceMoniteurPeer::XML_MONITEUR, $xmlMoniteur, $comparison);
    }

    /**
     * Filter the query on the id_annonce_boamp column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAnnonceBoamp(1234); // WHERE id_annonce_boamp = 1234
     * $query->filterByIdAnnonceBoamp(array(12, 34)); // WHERE id_annonce_boamp IN (12, 34)
     * $query->filterByIdAnnonceBoamp(array('min' => 12)); // WHERE id_annonce_boamp >= 12
     * $query->filterByIdAnnonceBoamp(array('max' => 12)); // WHERE id_annonce_boamp <= 12
     * </code>
     *
     * @param     mixed $idAnnonceBoamp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnonceMoniteurQuery The current query, for fluid interface
     */
    public function filterByIdAnnonceBoamp($idAnnonceBoamp = null, $comparison = null)
    {
        if (is_array($idAnnonceBoamp)) {
            $useMinMax = false;
            if (isset($idAnnonceBoamp['min'])) {
                $this->addUsingAlias(CommonAnnonceMoniteurPeer::ID_ANNONCE_BOAMP, $idAnnonceBoamp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAnnonceBoamp['max'])) {
                $this->addUsingAlias(CommonAnnonceMoniteurPeer::ID_ANNONCE_BOAMP, $idAnnonceBoamp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAnnonceMoniteurPeer::ID_ANNONCE_BOAMP, $idAnnonceBoamp, $comparison);
    }

    /**
     * Filter the query on the date_maj column
     *
     * Example usage:
     * <code>
     * $query->filterByDateMaj('fooValue');   // WHERE date_maj = 'fooValue'
     * $query->filterByDateMaj('%fooValue%'); // WHERE date_maj LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateMaj The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnonceMoniteurQuery The current query, for fluid interface
     */
    public function filterByDateMaj($dateMaj = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateMaj)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateMaj)) {
                $dateMaj = str_replace('*', '%', $dateMaj);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAnnonceMoniteurPeer::DATE_MAJ, $dateMaj, $comparison);
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
     * @return CommonAnnonceMoniteurQuery The current query, for fluid interface
     */
    public function filterByIdFormXml($idFormXml = null, $comparison = null)
    {
        if (is_array($idFormXml)) {
            $useMinMax = false;
            if (isset($idFormXml['min'])) {
                $this->addUsingAlias(CommonAnnonceMoniteurPeer::ID_FORM_XML, $idFormXml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idFormXml['max'])) {
                $this->addUsingAlias(CommonAnnonceMoniteurPeer::ID_FORM_XML, $idFormXml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAnnonceMoniteurPeer::ID_FORM_XML, $idFormXml, $comparison);
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
     * @return CommonAnnonceMoniteurQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonAnnonceMoniteurPeer::ACCUSE_RECEPTION, $accuseReception, $comparison);
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
     * @return CommonAnnonceMoniteurQuery The current query, for fluid interface
     */
    public function filterByIdDestinationFormXml($idDestinationFormXml = null, $comparison = null)
    {
        if (is_array($idDestinationFormXml)) {
            $useMinMax = false;
            if (isset($idDestinationFormXml['min'])) {
                $this->addUsingAlias(CommonAnnonceMoniteurPeer::ID_DESTINATION_FORM_XML, $idDestinationFormXml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDestinationFormXml['max'])) {
                $this->addUsingAlias(CommonAnnonceMoniteurPeer::ID_DESTINATION_FORM_XML, $idDestinationFormXml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAnnonceMoniteurPeer::ID_DESTINATION_FORM_XML, $idDestinationFormXml, $comparison);
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
     * @return CommonAnnonceMoniteurQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonAnnonceMoniteurPeer::STATUT_DESTINATAIRE, $statutDestinataire, $comparison);
    }

    /**
     * Filter the query on the commentaire column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentaire('fooValue');   // WHERE commentaire = 'fooValue'
     * $query->filterByCommentaire('%fooValue%'); // WHERE commentaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commentaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnonceMoniteurQuery The current query, for fluid interface
     */
    public function filterByCommentaire($commentaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commentaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commentaire)) {
                $commentaire = str_replace('*', '%', $commentaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAnnonceMoniteurPeer::COMMENTAIRE, $commentaire, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonAnnonceMoniteur $commonAnnonceMoniteur Object to remove from the list of results
     *
     * @return CommonAnnonceMoniteurQuery The current query, for fluid interface
     */
    public function prune($commonAnnonceMoniteur = null)
    {
        if ($commonAnnonceMoniteur) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonAnnonceMoniteurPeer::ID), $commonAnnonceMoniteur->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonAnnonceMoniteurPeer::ORGANISME), $commonAnnonceMoniteur->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
