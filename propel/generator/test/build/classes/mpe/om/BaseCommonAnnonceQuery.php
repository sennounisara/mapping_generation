<?php


/**
 * Base class that represents a query for the 'Annonce' table.
 *
 * 
 *
 * @method CommonAnnonceQuery orderByIdBoamp($order = Criteria::ASC) Order by the id_boamp column
 * @method CommonAnnonceQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonAnnonceQuery orderByEnvoiBoamp($order = Criteria::ASC) Order by the envoi_boamp column
 * @method CommonAnnonceQuery orderByDateEnvoi($order = Criteria::ASC) Order by the date_envoi column
 * @method CommonAnnonceQuery orderByDatepub($order = Criteria::ASC) Order by the datepub column
 * @method CommonAnnonceQuery orderByConsultationRef($order = Criteria::ASC) Order by the consultation_ref column
 * @method CommonAnnonceQuery orderByNomFichierXml($order = Criteria::ASC) Order by the nom_fichier_xml column
 * @method CommonAnnonceQuery orderByEnvoiJoue($order = Criteria::ASC) Order by the envoi_joue column
 * @method CommonAnnonceQuery orderByMapa($order = Criteria::ASC) Order by the mapa column
 * @method CommonAnnonceQuery orderByImpliqueSad($order = Criteria::ASC) Order by the implique_SAD column
 * @method CommonAnnonceQuery orderByDateMaj($order = Criteria::ASC) Order by the date_maj column
 *
 * @method CommonAnnonceQuery groupByIdBoamp() Group by the id_boamp column
 * @method CommonAnnonceQuery groupByOrganisme() Group by the organisme column
 * @method CommonAnnonceQuery groupByEnvoiBoamp() Group by the envoi_boamp column
 * @method CommonAnnonceQuery groupByDateEnvoi() Group by the date_envoi column
 * @method CommonAnnonceQuery groupByDatepub() Group by the datepub column
 * @method CommonAnnonceQuery groupByConsultationRef() Group by the consultation_ref column
 * @method CommonAnnonceQuery groupByNomFichierXml() Group by the nom_fichier_xml column
 * @method CommonAnnonceQuery groupByEnvoiJoue() Group by the envoi_joue column
 * @method CommonAnnonceQuery groupByMapa() Group by the mapa column
 * @method CommonAnnonceQuery groupByImpliqueSad() Group by the implique_SAD column
 * @method CommonAnnonceQuery groupByDateMaj() Group by the date_maj column
 *
 * @method CommonAnnonceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonAnnonceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonAnnonceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonAnnonceQuery leftJoinCommonConsultation($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonConsultation relation
 * @method CommonAnnonceQuery rightJoinCommonConsultation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonConsultation relation
 * @method CommonAnnonceQuery innerJoinCommonConsultation($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonConsultation relation
 *
 * @method CommonAnnonce findOne(PropelPDO $con = null) Return the first CommonAnnonce matching the query
 * @method CommonAnnonce findOneOrCreate(PropelPDO $con = null) Return the first CommonAnnonce matching the query, or a new CommonAnnonce object populated from the query conditions when no match is found
 *
 * @method CommonAnnonce findOneByIdBoamp(int $id_boamp) Return the first CommonAnnonce filtered by the id_boamp column
 * @method CommonAnnonce findOneByOrganisme(string $organisme) Return the first CommonAnnonce filtered by the organisme column
 * @method CommonAnnonce findOneByEnvoiBoamp(int $envoi_boamp) Return the first CommonAnnonce filtered by the envoi_boamp column
 * @method CommonAnnonce findOneByDateEnvoi(string $date_envoi) Return the first CommonAnnonce filtered by the date_envoi column
 * @method CommonAnnonce findOneByDatepub(string $datepub) Return the first CommonAnnonce filtered by the datepub column
 * @method CommonAnnonce findOneByConsultationRef(int $consultation_ref) Return the first CommonAnnonce filtered by the consultation_ref column
 * @method CommonAnnonce findOneByNomFichierXml(string $nom_fichier_xml) Return the first CommonAnnonce filtered by the nom_fichier_xml column
 * @method CommonAnnonce findOneByEnvoiJoue(string $envoi_joue) Return the first CommonAnnonce filtered by the envoi_joue column
 * @method CommonAnnonce findOneByMapa(string $mapa) Return the first CommonAnnonce filtered by the mapa column
 * @method CommonAnnonce findOneByImpliqueSad(string $implique_SAD) Return the first CommonAnnonce filtered by the implique_SAD column
 * @method CommonAnnonce findOneByDateMaj(string $date_maj) Return the first CommonAnnonce filtered by the date_maj column
 *
 * @method array findByIdBoamp(int $id_boamp) Return CommonAnnonce objects filtered by the id_boamp column
 * @method array findByOrganisme(string $organisme) Return CommonAnnonce objects filtered by the organisme column
 * @method array findByEnvoiBoamp(int $envoi_boamp) Return CommonAnnonce objects filtered by the envoi_boamp column
 * @method array findByDateEnvoi(string $date_envoi) Return CommonAnnonce objects filtered by the date_envoi column
 * @method array findByDatepub(string $datepub) Return CommonAnnonce objects filtered by the datepub column
 * @method array findByConsultationRef(int $consultation_ref) Return CommonAnnonce objects filtered by the consultation_ref column
 * @method array findByNomFichierXml(string $nom_fichier_xml) Return CommonAnnonce objects filtered by the nom_fichier_xml column
 * @method array findByEnvoiJoue(string $envoi_joue) Return CommonAnnonce objects filtered by the envoi_joue column
 * @method array findByMapa(string $mapa) Return CommonAnnonce objects filtered by the mapa column
 * @method array findByImpliqueSad(string $implique_SAD) Return CommonAnnonce objects filtered by the implique_SAD column
 * @method array findByDateMaj(string $date_maj) Return CommonAnnonce objects filtered by the date_maj column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonAnnonceQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonAnnonceQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonAnnonce', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonAnnonceQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonAnnonceQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonAnnonceQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonAnnonceQuery) {
            return $criteria;
        }
        $query = new CommonAnnonceQuery();
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
     * @return   CommonAnnonce|CommonAnnonce[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonAnnoncePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonAnnoncePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonAnnonce A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_boamp`, `organisme`, `envoi_boamp`, `date_envoi`, `datepub`, `consultation_ref`, `nom_fichier_xml`, `envoi_joue`, `mapa`, `implique_SAD`, `date_maj` FROM `Annonce` WHERE `id_boamp` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonAnnonce();
            $obj->hydrate($row);
            CommonAnnoncePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonAnnonce|CommonAnnonce[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonAnnonce[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonAnnonceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonAnnoncePeer::ID_BOAMP, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonAnnoncePeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonAnnonceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonAnnoncePeer::ID_BOAMP, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonAnnoncePeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonAnnonceQuery The current query, for fluid interface
     */
    public function filterByIdBoamp($idBoamp = null, $comparison = null)
    {
        if (is_array($idBoamp)) {
            $useMinMax = false;
            if (isset($idBoamp['min'])) {
                $this->addUsingAlias(CommonAnnoncePeer::ID_BOAMP, $idBoamp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBoamp['max'])) {
                $this->addUsingAlias(CommonAnnoncePeer::ID_BOAMP, $idBoamp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAnnoncePeer::ID_BOAMP, $idBoamp, $comparison);
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
     * @return CommonAnnonceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonAnnoncePeer::ORGANISME, $organisme, $comparison);
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
     * @return CommonAnnonceQuery The current query, for fluid interface
     */
    public function filterByEnvoiBoamp($envoiBoamp = null, $comparison = null)
    {
        if (is_array($envoiBoamp)) {
            $useMinMax = false;
            if (isset($envoiBoamp['min'])) {
                $this->addUsingAlias(CommonAnnoncePeer::ENVOI_BOAMP, $envoiBoamp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($envoiBoamp['max'])) {
                $this->addUsingAlias(CommonAnnoncePeer::ENVOI_BOAMP, $envoiBoamp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAnnoncePeer::ENVOI_BOAMP, $envoiBoamp, $comparison);
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
     * @return CommonAnnonceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonAnnoncePeer::DATE_ENVOI, $dateEnvoi, $comparison);
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
     * @return CommonAnnonceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonAnnoncePeer::DATEPUB, $datepub, $comparison);
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
     * @return CommonAnnonceQuery The current query, for fluid interface
     */
    public function filterByConsultationRef($consultationRef = null, $comparison = null)
    {
        if (is_array($consultationRef)) {
            $useMinMax = false;
            if (isset($consultationRef['min'])) {
                $this->addUsingAlias(CommonAnnoncePeer::CONSULTATION_REF, $consultationRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($consultationRef['max'])) {
                $this->addUsingAlias(CommonAnnoncePeer::CONSULTATION_REF, $consultationRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAnnoncePeer::CONSULTATION_REF, $consultationRef, $comparison);
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
     * @return CommonAnnonceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonAnnoncePeer::NOM_FICHIER_XML, $nomFichierXml, $comparison);
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
     * @return CommonAnnonceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonAnnoncePeer::ENVOI_JOUE, $envoiJoue, $comparison);
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
     * @return CommonAnnonceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonAnnoncePeer::MAPA, $mapa, $comparison);
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
     * @return CommonAnnonceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonAnnoncePeer::IMPLIQUE_SAD, $impliqueSad, $comparison);
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
     * @return CommonAnnonceQuery The current query, for fluid interface
     */
    public function filterByDateMaj($dateMaj = null, $comparison = null)
    {
        if (is_array($dateMaj)) {
            $useMinMax = false;
            if (isset($dateMaj['min'])) {
                $this->addUsingAlias(CommonAnnoncePeer::DATE_MAJ, $dateMaj['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateMaj['max'])) {
                $this->addUsingAlias(CommonAnnoncePeer::DATE_MAJ, $dateMaj['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAnnoncePeer::DATE_MAJ, $dateMaj, $comparison);
    }

    /**
     * Filter the query by a related CommonConsultation object
     *
     * @param   CommonConsultation $commonConsultation The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAnnonceQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonConsultation($commonConsultation, $comparison = null)
    {
        if ($commonConsultation instanceof CommonConsultation) {
            return $this
                ->addUsingAlias(CommonAnnoncePeer::ORGANISME, $commonConsultation->getOrganisme(), $comparison)
                ->addUsingAlias(CommonAnnoncePeer::CONSULTATION_REF, $commonConsultation->getReference(), $comparison);
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
     * @return CommonAnnonceQuery The current query, for fluid interface
     */
    public function joinCommonConsultation($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useCommonConsultationQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonConsultation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonConsultation', 'CommonConsultationQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonAnnonce $commonAnnonce Object to remove from the list of results
     *
     * @return CommonAnnonceQuery The current query, for fluid interface
     */
    public function prune($commonAnnonce = null)
    {
        if ($commonAnnonce) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonAnnoncePeer::ID_BOAMP), $commonAnnonce->getIdBoamp(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonAnnoncePeer::ORGANISME), $commonAnnonce->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
