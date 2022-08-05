<?php


/**
 * Base class that represents a query for the 'Mesure_avancement' table.
 *
 * 
 *
 * @method CommonMesureAvancementQuery orderByIdMesure($order = Criteria::ASC) Order by the id_mesure column
 * @method CommonMesureAvancementQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonMesureAvancementQuery orderByIdService($order = Criteria::ASC) Order by the id_service column
 * @method CommonMesureAvancementQuery orderByAnnee($order = Criteria::ASC) Order by the annee column
 * @method CommonMesureAvancementQuery orderByTrimestre($order = Criteria::ASC) Order by the trimestre column
 * @method CommonMesureAvancementQuery orderBySiren($order = Criteria::ASC) Order by the siren column
 * @method CommonMesureAvancementQuery orderByNic($order = Criteria::ASC) Order by the nic column
 * @method CommonMesureAvancementQuery orderByIdentifiantService($order = Criteria::ASC) Order by the identifiant_service column
 * @method CommonMesureAvancementQuery orderByMail($order = Criteria::ASC) Order by the mail column
 * @method CommonMesureAvancementQuery orderByTypePouvoirAdjudicateur($order = Criteria::ASC) Order by the type_pouvoir_adjudicateur column
 * @method CommonMesureAvancementQuery orderByDepartement($order = Criteria::ASC) Order by the departement column
 * @method CommonMesureAvancementQuery orderByDateEnvoi($order = Criteria::ASC) Order by the date_envoi column
 * @method CommonMesureAvancementQuery orderByDateAccuse($order = Criteria::ASC) Order by the date_accuse column
 * @method CommonMesureAvancementQuery orderByEtat($order = Criteria::ASC) Order by the etat column
 * @method CommonMesureAvancementQuery orderByDateCreation($order = Criteria::ASC) Order by the date_creation column
 * @method CommonMesureAvancementQuery orderByXml($order = Criteria::ASC) Order by the xml column
 * @method CommonMesureAvancementQuery orderByNameXmlGenere($order = Criteria::ASC) Order by the name_xml_genere column
 *
 * @method CommonMesureAvancementQuery groupByIdMesure() Group by the id_mesure column
 * @method CommonMesureAvancementQuery groupByOrganisme() Group by the organisme column
 * @method CommonMesureAvancementQuery groupByIdService() Group by the id_service column
 * @method CommonMesureAvancementQuery groupByAnnee() Group by the annee column
 * @method CommonMesureAvancementQuery groupByTrimestre() Group by the trimestre column
 * @method CommonMesureAvancementQuery groupBySiren() Group by the siren column
 * @method CommonMesureAvancementQuery groupByNic() Group by the nic column
 * @method CommonMesureAvancementQuery groupByIdentifiantService() Group by the identifiant_service column
 * @method CommonMesureAvancementQuery groupByMail() Group by the mail column
 * @method CommonMesureAvancementQuery groupByTypePouvoirAdjudicateur() Group by the type_pouvoir_adjudicateur column
 * @method CommonMesureAvancementQuery groupByDepartement() Group by the departement column
 * @method CommonMesureAvancementQuery groupByDateEnvoi() Group by the date_envoi column
 * @method CommonMesureAvancementQuery groupByDateAccuse() Group by the date_accuse column
 * @method CommonMesureAvancementQuery groupByEtat() Group by the etat column
 * @method CommonMesureAvancementQuery groupByDateCreation() Group by the date_creation column
 * @method CommonMesureAvancementQuery groupByXml() Group by the xml column
 * @method CommonMesureAvancementQuery groupByNameXmlGenere() Group by the name_xml_genere column
 *
 * @method CommonMesureAvancementQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonMesureAvancementQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonMesureAvancementQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonMesureAvancement findOne(PropelPDO $con = null) Return the first CommonMesureAvancement matching the query
 * @method CommonMesureAvancement findOneOrCreate(PropelPDO $con = null) Return the first CommonMesureAvancement matching the query, or a new CommonMesureAvancement object populated from the query conditions when no match is found
 *
 * @method CommonMesureAvancement findOneByIdMesure(int $id_mesure) Return the first CommonMesureAvancement filtered by the id_mesure column
 * @method CommonMesureAvancement findOneByOrganisme(string $organisme) Return the first CommonMesureAvancement filtered by the organisme column
 * @method CommonMesureAvancement findOneByIdService(int $id_service) Return the first CommonMesureAvancement filtered by the id_service column
 * @method CommonMesureAvancement findOneByAnnee(string $annee) Return the first CommonMesureAvancement filtered by the annee column
 * @method CommonMesureAvancement findOneByTrimestre(string $trimestre) Return the first CommonMesureAvancement filtered by the trimestre column
 * @method CommonMesureAvancement findOneBySiren(string $siren) Return the first CommonMesureAvancement filtered by the siren column
 * @method CommonMesureAvancement findOneByNic(string $nic) Return the first CommonMesureAvancement filtered by the nic column
 * @method CommonMesureAvancement findOneByIdentifiantService(string $identifiant_service) Return the first CommonMesureAvancement filtered by the identifiant_service column
 * @method CommonMesureAvancement findOneByMail(string $mail) Return the first CommonMesureAvancement filtered by the mail column
 * @method CommonMesureAvancement findOneByTypePouvoirAdjudicateur(int $type_pouvoir_adjudicateur) Return the first CommonMesureAvancement filtered by the type_pouvoir_adjudicateur column
 * @method CommonMesureAvancement findOneByDepartement(int $departement) Return the first CommonMesureAvancement filtered by the departement column
 * @method CommonMesureAvancement findOneByDateEnvoi(string $date_envoi) Return the first CommonMesureAvancement filtered by the date_envoi column
 * @method CommonMesureAvancement findOneByDateAccuse(string $date_accuse) Return the first CommonMesureAvancement filtered by the date_accuse column
 * @method CommonMesureAvancement findOneByEtat(string $etat) Return the first CommonMesureAvancement filtered by the etat column
 * @method CommonMesureAvancement findOneByDateCreation(string $date_creation) Return the first CommonMesureAvancement filtered by the date_creation column
 * @method CommonMesureAvancement findOneByXml(string $xml) Return the first CommonMesureAvancement filtered by the xml column
 * @method CommonMesureAvancement findOneByNameXmlGenere(string $name_xml_genere) Return the first CommonMesureAvancement filtered by the name_xml_genere column
 *
 * @method array findByIdMesure(int $id_mesure) Return CommonMesureAvancement objects filtered by the id_mesure column
 * @method array findByOrganisme(string $organisme) Return CommonMesureAvancement objects filtered by the organisme column
 * @method array findByIdService(int $id_service) Return CommonMesureAvancement objects filtered by the id_service column
 * @method array findByAnnee(string $annee) Return CommonMesureAvancement objects filtered by the annee column
 * @method array findByTrimestre(string $trimestre) Return CommonMesureAvancement objects filtered by the trimestre column
 * @method array findBySiren(string $siren) Return CommonMesureAvancement objects filtered by the siren column
 * @method array findByNic(string $nic) Return CommonMesureAvancement objects filtered by the nic column
 * @method array findByIdentifiantService(string $identifiant_service) Return CommonMesureAvancement objects filtered by the identifiant_service column
 * @method array findByMail(string $mail) Return CommonMesureAvancement objects filtered by the mail column
 * @method array findByTypePouvoirAdjudicateur(int $type_pouvoir_adjudicateur) Return CommonMesureAvancement objects filtered by the type_pouvoir_adjudicateur column
 * @method array findByDepartement(int $departement) Return CommonMesureAvancement objects filtered by the departement column
 * @method array findByDateEnvoi(string $date_envoi) Return CommonMesureAvancement objects filtered by the date_envoi column
 * @method array findByDateAccuse(string $date_accuse) Return CommonMesureAvancement objects filtered by the date_accuse column
 * @method array findByEtat(string $etat) Return CommonMesureAvancement objects filtered by the etat column
 * @method array findByDateCreation(string $date_creation) Return CommonMesureAvancement objects filtered by the date_creation column
 * @method array findByXml(string $xml) Return CommonMesureAvancement objects filtered by the xml column
 * @method array findByNameXmlGenere(string $name_xml_genere) Return CommonMesureAvancement objects filtered by the name_xml_genere column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonMesureAvancementQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonMesureAvancementQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonMesureAvancement', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonMesureAvancementQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonMesureAvancementQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonMesureAvancementQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonMesureAvancementQuery) {
            return $criteria;
        }
        $query = new CommonMesureAvancementQuery();
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
                         A Primary key composition: [$id_mesure, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonMesureAvancement|CommonMesureAvancement[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonMesureAvancementPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonMesureAvancementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonMesureAvancement A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_mesure`, `organisme`, `id_service`, `annee`, `trimestre`, `siren`, `nic`, `identifiant_service`, `mail`, `type_pouvoir_adjudicateur`, `departement`, `date_envoi`, `date_accuse`, `etat`, `date_creation`, `xml`, `name_xml_genere` FROM `Mesure_avancement` WHERE `id_mesure` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonMesureAvancement();
            $obj->hydrate($row);
            CommonMesureAvancementPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonMesureAvancement|CommonMesureAvancement[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonMesureAvancement[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonMesureAvancementQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonMesureAvancementPeer::ID_MESURE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonMesureAvancementPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonMesureAvancementQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonMesureAvancementPeer::ID_MESURE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonMesureAvancementPeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the id_mesure column
     *
     * Example usage:
     * <code>
     * $query->filterByIdMesure(1234); // WHERE id_mesure = 1234
     * $query->filterByIdMesure(array(12, 34)); // WHERE id_mesure IN (12, 34)
     * $query->filterByIdMesure(array('min' => 12)); // WHERE id_mesure >= 12
     * $query->filterByIdMesure(array('max' => 12)); // WHERE id_mesure <= 12
     * </code>
     *
     * @param     mixed $idMesure The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMesureAvancementQuery The current query, for fluid interface
     */
    public function filterByIdMesure($idMesure = null, $comparison = null)
    {
        if (is_array($idMesure)) {
            $useMinMax = false;
            if (isset($idMesure['min'])) {
                $this->addUsingAlias(CommonMesureAvancementPeer::ID_MESURE, $idMesure['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idMesure['max'])) {
                $this->addUsingAlias(CommonMesureAvancementPeer::ID_MESURE, $idMesure['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonMesureAvancementPeer::ID_MESURE, $idMesure, $comparison);
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
     * @return CommonMesureAvancementQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonMesureAvancementPeer::ORGANISME, $organisme, $comparison);
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
     * @return CommonMesureAvancementQuery The current query, for fluid interface
     */
    public function filterByIdService($idService = null, $comparison = null)
    {
        if (is_array($idService)) {
            $useMinMax = false;
            if (isset($idService['min'])) {
                $this->addUsingAlias(CommonMesureAvancementPeer::ID_SERVICE, $idService['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idService['max'])) {
                $this->addUsingAlias(CommonMesureAvancementPeer::ID_SERVICE, $idService['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonMesureAvancementPeer::ID_SERVICE, $idService, $comparison);
    }

    /**
     * Filter the query on the annee column
     *
     * Example usage:
     * <code>
     * $query->filterByAnnee('fooValue');   // WHERE annee = 'fooValue'
     * $query->filterByAnnee('%fooValue%'); // WHERE annee LIKE '%fooValue%'
     * </code>
     *
     * @param     string $annee The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMesureAvancementQuery The current query, for fluid interface
     */
    public function filterByAnnee($annee = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($annee)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $annee)) {
                $annee = str_replace('*', '%', $annee);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonMesureAvancementPeer::ANNEE, $annee, $comparison);
    }

    /**
     * Filter the query on the trimestre column
     *
     * Example usage:
     * <code>
     * $query->filterByTrimestre('fooValue');   // WHERE trimestre = 'fooValue'
     * $query->filterByTrimestre('%fooValue%'); // WHERE trimestre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $trimestre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMesureAvancementQuery The current query, for fluid interface
     */
    public function filterByTrimestre($trimestre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($trimestre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $trimestre)) {
                $trimestre = str_replace('*', '%', $trimestre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonMesureAvancementPeer::TRIMESTRE, $trimestre, $comparison);
    }

    /**
     * Filter the query on the siren column
     *
     * Example usage:
     * <code>
     * $query->filterBySiren('fooValue');   // WHERE siren = 'fooValue'
     * $query->filterBySiren('%fooValue%'); // WHERE siren LIKE '%fooValue%'
     * </code>
     *
     * @param     string $siren The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMesureAvancementQuery The current query, for fluid interface
     */
    public function filterBySiren($siren = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($siren)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $siren)) {
                $siren = str_replace('*', '%', $siren);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonMesureAvancementPeer::SIREN, $siren, $comparison);
    }

    /**
     * Filter the query on the nic column
     *
     * Example usage:
     * <code>
     * $query->filterByNic('fooValue');   // WHERE nic = 'fooValue'
     * $query->filterByNic('%fooValue%'); // WHERE nic LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nic The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMesureAvancementQuery The current query, for fluid interface
     */
    public function filterByNic($nic = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nic)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nic)) {
                $nic = str_replace('*', '%', $nic);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonMesureAvancementPeer::NIC, $nic, $comparison);
    }

    /**
     * Filter the query on the identifiant_service column
     *
     * Example usage:
     * <code>
     * $query->filterByIdentifiantService('fooValue');   // WHERE identifiant_service = 'fooValue'
     * $query->filterByIdentifiantService('%fooValue%'); // WHERE identifiant_service LIKE '%fooValue%'
     * </code>
     *
     * @param     string $identifiantService The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMesureAvancementQuery The current query, for fluid interface
     */
    public function filterByIdentifiantService($identifiantService = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($identifiantService)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $identifiantService)) {
                $identifiantService = str_replace('*', '%', $identifiantService);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonMesureAvancementPeer::IDENTIFIANT_SERVICE, $identifiantService, $comparison);
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
     * @return CommonMesureAvancementQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonMesureAvancementPeer::MAIL, $mail, $comparison);
    }

    /**
     * Filter the query on the type_pouvoir_adjudicateur column
     *
     * Example usage:
     * <code>
     * $query->filterByTypePouvoirAdjudicateur(1234); // WHERE type_pouvoir_adjudicateur = 1234
     * $query->filterByTypePouvoirAdjudicateur(array(12, 34)); // WHERE type_pouvoir_adjudicateur IN (12, 34)
     * $query->filterByTypePouvoirAdjudicateur(array('min' => 12)); // WHERE type_pouvoir_adjudicateur >= 12
     * $query->filterByTypePouvoirAdjudicateur(array('max' => 12)); // WHERE type_pouvoir_adjudicateur <= 12
     * </code>
     *
     * @param     mixed $typePouvoirAdjudicateur The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMesureAvancementQuery The current query, for fluid interface
     */
    public function filterByTypePouvoirAdjudicateur($typePouvoirAdjudicateur = null, $comparison = null)
    {
        if (is_array($typePouvoirAdjudicateur)) {
            $useMinMax = false;
            if (isset($typePouvoirAdjudicateur['min'])) {
                $this->addUsingAlias(CommonMesureAvancementPeer::TYPE_POUVOIR_ADJUDICATEUR, $typePouvoirAdjudicateur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typePouvoirAdjudicateur['max'])) {
                $this->addUsingAlias(CommonMesureAvancementPeer::TYPE_POUVOIR_ADJUDICATEUR, $typePouvoirAdjudicateur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonMesureAvancementPeer::TYPE_POUVOIR_ADJUDICATEUR, $typePouvoirAdjudicateur, $comparison);
    }

    /**
     * Filter the query on the departement column
     *
     * Example usage:
     * <code>
     * $query->filterByDepartement(1234); // WHERE departement = 1234
     * $query->filterByDepartement(array(12, 34)); // WHERE departement IN (12, 34)
     * $query->filterByDepartement(array('min' => 12)); // WHERE departement >= 12
     * $query->filterByDepartement(array('max' => 12)); // WHERE departement <= 12
     * </code>
     *
     * @param     mixed $departement The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMesureAvancementQuery The current query, for fluid interface
     */
    public function filterByDepartement($departement = null, $comparison = null)
    {
        if (is_array($departement)) {
            $useMinMax = false;
            if (isset($departement['min'])) {
                $this->addUsingAlias(CommonMesureAvancementPeer::DEPARTEMENT, $departement['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($departement['max'])) {
                $this->addUsingAlias(CommonMesureAvancementPeer::DEPARTEMENT, $departement['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonMesureAvancementPeer::DEPARTEMENT, $departement, $comparison);
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
     * @return CommonMesureAvancementQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonMesureAvancementPeer::DATE_ENVOI, $dateEnvoi, $comparison);
    }

    /**
     * Filter the query on the date_accuse column
     *
     * Example usage:
     * <code>
     * $query->filterByDateAccuse('fooValue');   // WHERE date_accuse = 'fooValue'
     * $query->filterByDateAccuse('%fooValue%'); // WHERE date_accuse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateAccuse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMesureAvancementQuery The current query, for fluid interface
     */
    public function filterByDateAccuse($dateAccuse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateAccuse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateAccuse)) {
                $dateAccuse = str_replace('*', '%', $dateAccuse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonMesureAvancementPeer::DATE_ACCUSE, $dateAccuse, $comparison);
    }

    /**
     * Filter the query on the etat column
     *
     * Example usage:
     * <code>
     * $query->filterByEtat('fooValue');   // WHERE etat = 'fooValue'
     * $query->filterByEtat('%fooValue%'); // WHERE etat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $etat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMesureAvancementQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonMesureAvancementPeer::ETAT, $etat, $comparison);
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
     * @return CommonMesureAvancementQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonMesureAvancementPeer::DATE_CREATION, $dateCreation, $comparison);
    }

    /**
     * Filter the query on the xml column
     *
     * Example usage:
     * <code>
     * $query->filterByXml('fooValue');   // WHERE xml = 'fooValue'
     * $query->filterByXml('%fooValue%'); // WHERE xml LIKE '%fooValue%'
     * </code>
     *
     * @param     string $xml The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMesureAvancementQuery The current query, for fluid interface
     */
    public function filterByXml($xml = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($xml)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $xml)) {
                $xml = str_replace('*', '%', $xml);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonMesureAvancementPeer::XML, $xml, $comparison);
    }

    /**
     * Filter the query on the name_xml_genere column
     *
     * Example usage:
     * <code>
     * $query->filterByNameXmlGenere('fooValue');   // WHERE name_xml_genere = 'fooValue'
     * $query->filterByNameXmlGenere('%fooValue%'); // WHERE name_xml_genere LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nameXmlGenere The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMesureAvancementQuery The current query, for fluid interface
     */
    public function filterByNameXmlGenere($nameXmlGenere = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nameXmlGenere)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nameXmlGenere)) {
                $nameXmlGenere = str_replace('*', '%', $nameXmlGenere);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonMesureAvancementPeer::NAME_XML_GENERE, $nameXmlGenere, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonMesureAvancement $commonMesureAvancement Object to remove from the list of results
     *
     * @return CommonMesureAvancementQuery The current query, for fluid interface
     */
    public function prune($commonMesureAvancement = null)
    {
        if ($commonMesureAvancement) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonMesureAvancementPeer::ID_MESURE), $commonMesureAvancement->getIdMesure(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonMesureAvancementPeer::ORGANISME), $commonMesureAvancement->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
